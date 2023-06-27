<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        $routes = ['news.edit','news.update'];
        //Store rules
        $rules = [
            'title'=>'required',
            'slug'=>'required',
            'link'=>'required',
            'month'=>'required',
            'year'=>'required',
            'is_published'=>'nullable',
        ];
        
        if (in_array(request()->route()->getName(),$routes)) {
            //Update rules
            $rules['photo']='nullable|mimes:png,jpg,jpeg';
        }else{
            $rules['photo']='required|mimes:png,jpg,jpeg';
        }
        return $rules;
    }
}
