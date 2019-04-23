<?php

namespace App\Http\Requests;

use App\Company;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('company_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
