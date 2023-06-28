<?php


namespace App\Repositories;

use App\Models\Movie;
use Illuminate\Support\Facades\File;

class MovieRepository
{
    public $model;

    /**
     * MovieRepository constructor.
     */
    public function __construct(Movie $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }

    // Get data by slug
    public function findBySlug($slug)
    {
        $this->model = new Movie() ;
        return $this->model->where('slug',$slug)->first();
    }


    // Create new recoard
    public function create($params)
    {
        $movie = $this->model->create($params);

        return $movie;
    }

    // Update recoard
    public function update($params, $id)
    {
        $movie = $this->findByID($id)->update($params);
        return $movie;
    }

    // Delete image recoard
    public function deleteImage($fileName, $id)
    {
        $movie = $this->findByID($id);
        $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $id . DIRECTORY_SEPARATOR . $fileName ;
            if (File::exists(storage_path('app/' . $fileDir))) {
                File::delete(storage_path('app/' . $fileDir));
            }
        $gallery = json_decode($movie->gallery, true);

        $movie->gallery = array_diff($gallery, [$fileName]); 
        $movie->save();
        return $movie;
    }


    public function filter($params)
    {
        $this->model = new Movie() ;
        
        $params['return_type'] = $params['return_type'] ?? '';

        $this->model = $this->model->when(!empty($params['query_str']), function ($query) use ($params) {
            $query->where(function ($query) use ($params) {
                $query->orWhere('title', 'LIKE', '%' . $params['query_str'] . '%')
                      ->orWhere('directed_by', 'LIKE', '%' . $params['query_str'] . '%')
                      ->orWhere('produced_by', 'LIKE', '%' . $params['query_str'] . '%')
                      ->orWhere('main_cast', 'LIKE', '%' . $params['query_str'] . '%');
            });
        });
        
        $this->model = $this->model->when(!empty($params['type']), function ($query) use ($params) {
            $query->where('type', $params['type']);
        });

        $this->model = $this->model->when(!empty($params['is_active']), function ($query) use ($params) {
            $query->where('is_active', $params['is_active']);
        });

        $this->model = $this->model->when(!empty($params['is_recent']), function ($query) use ($params) {
            $query->where('is_recent', $params['is_recent']);
        });

        $this->model = $this->model->when(!empty($params['is_banner']), function ($query) use ($params) {
            $query->where('is_banner', $params['is_banner'])->orderBy('banner_order','desc');
        });

        $this->model = $this->model->when(!empty($params['release_date']), function ($query) use ($params) {
            $query->whereNotNull('release_date');
        });

        $this->model = $this->model->when(!empty($params['status']), function ($query) use ($params) {
            $query->where('status', $params['status']);
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
        $movie = $this->findByID($id);
        if ($movie->is_active == 'Y') {
            $movie->is_active = 'N';
        } else {
            $movie->is_active = 'Y';
        }
        return $movie->save();
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        if( $params['type'] ==  'MOVIE'){
            return view('admin.movie.table', compact('tableData'))->render();
        }
        if( $params['type'] ==  'WEBSERIES'){
            return view('admin.webseries.table', compact('tableData'))->render();
        }
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
