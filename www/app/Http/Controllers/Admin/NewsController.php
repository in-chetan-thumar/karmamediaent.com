<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $table = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));

        return view('admin.news.news_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $data = [];
            $data['error'] = false;
            $data['view'] = view('admin.news.offcanvas')->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        try {
            $data = $params = [];
            DB::beginTransaction();
            // Create news
            $params = $request->validated();
            if ($request->hasFile('photo')) {

                $fileDir = config('constants.NEWS_DOC_PATH');

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['photo'] = basename($request->file('photo')->store($fileDir));
            }
            if ($request->has('is_published')) {
                $params['is_published'] = 'Y';
            } else {
                $params['is_published'] = 'N';
            }
            $news = resolve('news-repo')->create($params);

            if (!empty($news)) {

                $data['error'] = false;
                $data['message'] = 'News create successfully.';
                $data['view'] = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }

            $data['error'] = true;
            $data['message'] = 'News not created successfully..!';
            return response()->json($data);
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $data = [];
            $news = resolve('news-repo')->findByID($id);

            $data['error'] = false;
            $data['view'] = view('admin.news.offcanvas', compact('news'))->render();
            return response()->json($data);

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, string $id)
    {
        try {
            $data = $params = [];
            DB::beginTransaction();
            // Update news
            $params = $request->validated();
            if ($request->hasFile('photo')) {

                $fileDir = config('constants.NEWS_DOC_PATH');

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['photo'] = basename($request->file('photo')->store($fileDir));
            }
            // dd($params);
            if ($request->has('is_published')) {
                $params['is_published'] = 'Y';
            } else {
                $params['is_published'] = 'N';
            }
            $news = resolve('news-repo')->update($params, $id);

            if ($news) {
                $data['error'] = false;
                $data['message'] = 'News updated successfully.';
                $data['view'] = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }

            $data['error'] = true;
            $data['message'] = 'News not updated successfully..!';
            return response()->json($data);
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $news = resolve('news-repo')->findById($id);
            if (!empty($news)) {
                $news->delete();
                toastr()->success('News deleted successfully..!');
                return redirect()->route('news.index');
            } else {
                toastr()->error('News not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function changeStatus($id)
    {
        try {
            $news = resolve('news-repo')->changeStatus($id);
            toastr()->success('Status changed successfully..!');
            return redirect()->route('news.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('news.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] = $request->page ?? 0;
            $params['type'] = $request->type ?? null;
            $params['start_date'] = $request->start_date ?? null;
            $params['end_date'] = $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] = url()->previous();
        }

        /* if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        } */

        return $params;
    }
}
