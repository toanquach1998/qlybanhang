<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_code' => 'required|min:3|max:20|unique:categories',
            'category_name' => 'required|min:3|max:20|'
        ];
    }
    public function messages(){

        return [
           'category_code.required',
           'category_code.min',
        ];
    }
}
