<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => ['required','min:3','max:125'],
            'category_id' => ['required','exists:categories,id'],
            'price' => ['required','numeric'],
            'thumbnail_url' => ['required','image','mimes:png,jpeg,jpg','max:2000'],
            'demo_url' => ['required','image','mimes:png,jpeg,jpg','max:2000'],
            'source_url' => ['required','image','mimes:png,jpeg,jpg','max:2000'],
            'description' => ['required','min:10'],
        ];
    }
}
