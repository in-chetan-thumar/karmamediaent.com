<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $routes = ['movie.edit', 'movie.update', 'webseries.edit', 'webseries.update'];
        //Store rules
        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'directed_by' => 'nullable',
            'produced_by' => 'nullable',
            'main_cast' => 'nullable',
            'release_date' => 'nullable',
            'logo' => 'nullable|mimes:png,jpg,jpeg',
            'youtube_trailer_link' => 'nullable',
            'gallery' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'youtube' => 'nullable',
            'twitter' => 'nullable',
            'netflix' => 'nullable',
            'amazon_prime' => 'nullable',
            'zee5' => 'nullable',
            'alt_balaji' => 'nullable',
            'hotstar' => 'nullable',
            'eros_now' => 'nullable',
            'mx_player' => 'nullable',
            'status' => 'nullable',
            'is_recent' => 'nullable',
            'is_clickable' => 'nullable',
            'is_banner' => 'nullable',

        ];

        if (in_array(request()->route()->getName(), $routes)) {
            //Update rules
            $rules['poster_landscape'] = 'nullable|mimes:png,jpg,jpeg';
            $rules['poster_potrait'] = 'nullable|mimes:png,jpg,jpeg';
            $rules['banner_image'] = 'nullable|mimes:png,jpg,jpeg';
            $rules['banner_thumbnail'] = 'nullable|mimes:png,jpg,jpeg';
            if (request()->input('is_banner')) {
                if (is_null(request()->input('banner_image_file'))) {

                    $rules['banner_image'] = 'required|mimes:png,jpg,jpeg';
                    $rules['banner_thumbnail'] = 'required|mimes:png,jpg,jpeg';
                }
                $rules['banner_order'] = 'required|numeric';
            } else {
                $rules['banner_order'] = 'nullable|numeric';
            }
        } else {
            $rules['poster_landscape'] = 'required|mimes:png,jpg,jpeg';
            $rules['poster_potrait'] = 'required|mimes:png,jpg,jpeg';
            if (request()->input('is_banner')) {
                $rules['banner_image'] = 'required|mimes:png,jpg,jpeg';
                $rules['banner_thumbnail'] = 'required|mimes:png,jpg,jpeg';
                $rules['banner_order'] = 'required|numeric';
            } else {
                $rules['banner_image'] = 'nullable|mimes:png,jpg,jpeg';
                $rules['banner_thumbnail'] = 'nullable|mimes:png,jpg,jpeg';
                $rules['banner_order'] = 'nullable|numeric';
            }
        }
        return $rules;
    }
}
