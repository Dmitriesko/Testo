<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:10|max:255',
            'content' => 'required|string|min:10',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }
}
