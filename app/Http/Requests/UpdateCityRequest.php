<?php

namespace App\Http\Requests;

use App\City;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCityRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('city_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
