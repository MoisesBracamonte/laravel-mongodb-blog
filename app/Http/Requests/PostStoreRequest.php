<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'category_id' =>   'required',
             'tag_id' =>             'required',
             'name' =>               'required|min:4',
             'slug' =>                  'required|min:4|unique:posts,slug',
             'excerpt' =>           'required|min:4',
             'body' =>                'required|min:4',

        ];
    }
}
