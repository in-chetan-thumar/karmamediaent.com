<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $table = resolve('movie-repo')->renderHtmlTable($this->getParamsForFilter($request));

        return view('admin.movie.movie_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $data = [];
            $data['error'] = false;
            $data['view'] = view('admin.movie.offcanvas')->render();
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
            DB::beginTransaction();
            $data = $params = [];
            // Create movie
            $params = [];
            $movie = resolve('movie-repo')->create($params);
            $params = $request->validated();
            $params['type'] = 'MOVIE';

            if ($request->hasFile('logo')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $movie->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['logo'] = basename($request->file('logo')->store($fileDir));
            }
            if ($request->hasFile('poster_landscape')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $movie->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['poster_landscape'] = basename($request->file('poster_landscape')->store($fileDir));
            }
            if ($request->hasFile('poster_potrait')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $movie->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['poster_potrait'] = basename($request->file('poster_potrait')->store($fileDir));
            }
            if ($request->hasFile('banner_image')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $movie->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['banner_image'] = basename($request->file('banner_image')->store($fileDir));
            }
            if ($request->hasFile('banner_thumbnail')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $movie->id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['banner_thumbnail'] = basename($request->file('banner_thumbnail')->store($fileDir));
            }
            if ($request->hasFile('images')) {

                $file_names = [] ;
                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $movie->id;

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
            if ($request->has('is_banner')) {
                $params['is_banner'] = 'Y';
            } else {
                $params['is_banner'] = 'N';
            }
            $movie = resolve('movie-repo')->update($params, $movie->id);

            if (!empty($movie)) {

                $data['error'] = false;
                $data['message'] = 'Movie create successfully.';
                $data['view'] = resolve('movie-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }

            $data['error'] = true;
            $data['message'] = 'Movie not created successfully..!';
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
            $movie = resolve('movie-repo')->findByID($id);

            $data['error'] = false;
            $data['view'] = view('admin.movie.offcanvas', compact('movie'))->render();
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

            $movie = resolve('movie-repo')->findByID($id);

            // Update movie
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
            if ($request->hasFile('banner_image')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['banner_image'] = basename($request->file('banner_image')->store($fileDir));
            }
            if ($request->hasFile('banner_thumbnail')) {

                $fileDir = config('constants.MOVIE_DOC_PATH') . DIRECTORY_SEPARATOR . $id;

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['banner_thumbnail'] = basename($request->file('banner_thumbnail')->store($fileDir));
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
                if(!empty($movie->gallery)){
                    $gallery = json_decode($movie->gallery, true);
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
            if ($request->has('is_banner')) {
                $params['is_banner'] = 'Y';
            } else {
                $params['is_banner'] = 'N';
            }
            $movie_updated = $movie->update($params);

            if (!empty($movie_updated)) {

                $data['error'] = false;
                $data['message'] = 'Movie updated successfully.';
                $data['view'] = resolve('movie-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }
            
            $data['error'] = true;
            $data['message'] = 'Movie not updated successfully..!';
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
            $movie = resolve('movie-repo')->findById($id);
            if (!empty($movie)) {
                $movie->delete();
                toastr()->success('Movie deleted successfully..!');
                return redirect()->route('movie.index');
            } else {
                toastr()->error('Movie not found.!');
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
            $movie = resolve('movie-repo')->changeStatus($id);
            toastr()->success('Status changed successfully..!');
            return redirect()->route('movie.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }


    public function deleteImage($movieId, $imageName, $ext)
    {
        try {
            DB::beginTransaction();
            $fileName = $imageName .'.'. $ext ;
            
            $deleteImage = resolve('movie-repo')->deleteImage($fileName, $movieId);
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
        $params['type'] =  'MOVIE';

        if (request()->routeIs('movie.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['start_date'] =  $request->start_date ?? null;
            $params['end_date'] =  $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['type'] =  'MOVIE';
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
