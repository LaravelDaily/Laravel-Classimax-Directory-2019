<?php

namespace App\Http\Requests;

use App\Company;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('company_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
