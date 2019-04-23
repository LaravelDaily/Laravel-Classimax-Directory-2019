<?php

namespace App\Http\Requests;

use App\Category;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('category_edit');
    }

    public function rules()
    {
        return [
            'companies.*' => [
                'integer',
            ],
            'companies'   => [
                'array',
            ],
        ];
    }
}
