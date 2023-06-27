<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class WebseriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $table = resolve('movie-repo')->renderHtmlTable($this->getParamsForFilter($request));

        return view('admin.webseries.webseries_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $data = [];
            $data['error'] = false;
            $data['view'] = view('admin.webseries.offcanvas')->render();
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
    public function store(MovieRequest $request)
    {
        try {
            $data = $params = [];
            DB::beginTransaction();
            // Create webseries
            $params = [];
            $webseries = resolve('movie-repo')->create($params);
            $params = $request->validated();
            $params['type'] = 'WEBSERIES';

            if ($request->hasFile('logo')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $webseries->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['logo'] = basename($request->file('logo')->store($fileDir));
            }
            if ($request->hasFile('poster_landscape')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $webseries->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['poster_landscape'] = basename($request->file('poster_landscape')->store($fileDir));
            }
            if ($request->hasFile('poster_potrait')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $webseries->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['poster_potrait'] = basename($request->file('poster_potrait')->store($fileDir));
            }
            if ($request->hasFile('images')) {

                $file_names = [] ;
                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $webseries->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }

                foreach ($request->file('images') as $file) {
                    $file_names[] = basename($file->store($fileDir));
                }
                $params['gallery'] = $file_names ;
            }
            if ($request->has('status')) {
                $params['status'] = $request->status;
            }
            if ($request->has('is_clickable')) {
                $params['is_clickable'] = 'Y';
            } else {
                $params['is_clickable'] = 'N';
            }
            if ($request->has('is_recent')) {
                $params['is_recent'] = 'Y';
            } else {
                $params['is_recent'] = 'N';
            }
            $webseries = resolve('movie-repo')->update($params, $webseries->id);

            if (!empty($webseries)) {

                $data['error'] = false;
                $data['message'] = 'Webseries create successfully.';
                $data['view'] = resolve('movie-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }

            $data['error'] = true;
            $data['message'] = 'Webseries not created successfully..!';
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
            $webseries = resolve('movie-repo')->findByID($id);

            $data['error'] = false;
            $data['view'] = view('admin.webseries.offcanvas', compact('webseries'))->render();
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
    public function update(MovieRequest $request, string $id)
    {
        try {
            DB::beginTransaction();
            $data = $params = [];

            $webseries = resolve('movie-repo')->findByID($id);

            // Update webseries
            $params = $request->validated();

            if ($request->hasFile('logo')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['logo'] = basename($request->file('logo')->store($fileDir));
            }
            if ($request->hasFile('poster_landscape')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['poster_landscape'] = basename($request->file('poster_landscape')->store($fileDir));
            }
            if ($request->hasFile('poster_potrait')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['poster_potrait'] = basename($request->file('poster_potrait')->store($fileDir));
            }
            if ($request->hasFile('images')) {

                $file_names = [] ;
                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }

                foreach ($request->file('images') as $file) {
                    $file_names[] = basename($file->store($fileDir));
                }
                $gallery = [] ;
                if(!empty($webseries->gallery)){
                    $gallery = json_decode($webseries->gallery, true);
                }
                $params['gallery'] = array_merge($gallery ,$file_names) ;
            }
            if ($request->has('status')) {
                $params['status'] = $request->status;
            }
            if ($request->has('is_clickable')) {
                $params['is_clickable'] = 'Y';
            } else {
                $params['is_clickable'] = 'N';
            }
            if ($request->has('is_recent')) {
                $params['is_recent'] = 'Y';
            } else {
                $params['is_recent'] = 'N';
            }
            $webseries_updated = $webseries->update($params);

            if (!empty($webseries_updated)) {

                $data['error'] = false;
                $data['message'] = 'Webseries updated successfully.';
                $data['view'] = resolve('movie-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }
            
            $data['error'] = true;
            $data['message'] = 'Webseries not updated successfully..!';
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
            $webseries = resolve('movie-repo')->findById($id);
            if (!empty($webseries)) {
                $webseries->delete();
                toastr()->success('Webseries deleted successfully..!');
                return redirect()->route('webseries.index');
            } else {
                toastr()->error('Webseries not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    //Change status
    public function changeStatus($id)
    {
        try {
            $webseries = resolve('movie-repo')->changeStatus($id);
            toastr()->success('Status changed successfully..!');
            return redirect()->route('webseries.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }


    public function deleteImage($webseriesId, $imageName, $ext)
    {
        try {
            DB::beginTransaction();
            $fileName = $imageName .'.'. $ext ;
            
            $deleteImage = resolve('movie-repo')->deleteImage($fileName, $webseriesId);
            if(!empty($deleteImage)) {
                $data = [];
                $data['message'] = 'Image deleted successfully.';

                DB::commit();
                return response()->json($data);
            }

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = app('common-helper')->generateErrorMessage($e);
            DB::rollBack();
            return response()->json($data);
        }
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];
        $params['type'] =  'WEBSERIES';

        if (request()->routeIs('webseries.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['start_date'] =  $request->start_date ?? null;
            $params['end_date'] =  $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }

        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        }

        return $params;
    }
}
