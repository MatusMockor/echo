<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'   => 'required|unique:posts|string',
            'body'    => 'required|string',
            'excerpt' => 'required|string',
            'image'   => 'mimes:jpg,png,JPEG',
        ];
    }
}
