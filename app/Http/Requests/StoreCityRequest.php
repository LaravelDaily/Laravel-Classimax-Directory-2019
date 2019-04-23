<?php

namespace App\Http\Requests;

use App\City;
use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('city_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
