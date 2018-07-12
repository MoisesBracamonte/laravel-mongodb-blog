<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
        return [
             'category_id' =>   'required',
             'tag_id' =>             'required',
             'name' =>               'required|min:4',
             'slug' =>                  'required|min:4|unique:posts,slug,'.$this->post,
             'excerpt' =>           'required|min:4',
             'body' =>                'required|min:4',
        ];
    }
}
