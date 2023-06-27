<?php


namespace App\Repositories;

use App\Models\News;

class NewsRepository
{
    public $model;

    /**
     * NewsRepository constructor.
     */
    public function __construct(News $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }


    // Create new recoard
    public function create($params)
    {
        $news = $this->model->create($params);

        return $news;
    }

    // Update recoard
    public function update($params, $id)
    {
        $news = $this->findByID($id)->update($params);
        return $news;
    }


    public function filter($params)
    {
        $params['return_type'] = $params['return_type'] ?? '';

        $this->model = $this->model->when(!empty($params['query_str']), function ($query) use ($params) {
            $query->where('title', 'LIKE', '%' . $params['query_str'] . "%");
        });

        $this->model = $this->model->when(!empty($params['month']), function ($query) use ($params) {
            $query->where('month', $params['month']);
        });

        $this->model = $this->model->when(!empty($params['year']), function ($query) use ($params) {
            $query->where('year', $params['year']);
        });

        $this->model = $this->model->when(!empty($params['is_active']), function ($query) use ($params) {
            $query->where('is_active', $params['is_active']);
        });

        $this->model = $this->model->when(!empty($params['start_date'] && !empty($params['end_date'])), function ($q) use ($params) {
            return $q->whereBetween('created_at', [$params['start_date'], $params['end_date']]);
        });

        if ($params['return_type'] == 'drop_down') {
            return $this->model->pluck('name', 'id');

        } elseif ($params['return_type'] == 'object') {
            return $this->model->get();
            
        } else {
            return $this->model
                ->latest()
                ->paginate(isset($params['data_per_page']) ? $params['data_per_page'] : config('constants.PER_PAGE'), ['*'], 'page', !empty($params['page']) ? $params['page'] : '')
                ->setPath($params['path']);
        }
    }

    public function changeStatus($id)
    {
        $news = $this->findByID($id);
        if ($news->is_active == 'Y') {
            $news->is_active = 'N';
        } else {
            $news->is_active = 'Y';
        }
        return $news->save();
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.news.table', compact('tableData'))->render();
    }

    public function activeItemDropDown($params = [])
    {
        $params['is_active'] = 'Y';
        $params['order_by'] = ['name' => 'ASC'];
        $params['return_type'] = 'drop_down';
        return $this->filter($params);
    }

    public function activeItemObject($params = [])
    {
        $params['is_active'] = 'Y';
        $params['order_by'] = ['created_at' => 'DESC'];
        $params['return_type'] = 'object';

        return $this->filter($params);
    }
}
