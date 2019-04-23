<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityApiController extends Controller
{
    public function index()
    {
        $cities = City::all();

        return $cities;
    }

    public function store(StoreCityRequest $request)
    {
        return City::create($request->all());
    }

    public function update(UpdateCityRequest $request, City $city)
    {
        return $city->update($request->all());
    }

    public function show(City $city)
    {
        return $city;
    }

    public function destroy(City $city)
    {
        return $city->delete();
    }
}
