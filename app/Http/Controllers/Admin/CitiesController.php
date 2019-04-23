<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CitiesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('city_access'), 403);

        $cities = City::all();

        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('city_create'), 403);

        return view('admin.cities.create');
    }

    public function store(StoreCityRequest $request)
    {
        abort_unless(\Gate::allows('city_create'), 403);

        $city = City::create($request->all());

        return redirect()->route('admin.cities.index');
    }

    public function edit(City $city)
    {
        abort_unless(\Gate::allows('city_edit'), 403);

        return view('admin.cities.edit', compact('city'));
    }

    public function update(UpdateCityRequest $request, City $city)
    {
        abort_unless(\Gate::allows('city_edit'), 403);

        $city->update($request->all());

        return redirect()->route('admin.cities.index');
    }

    public function show(City $city)
    {
        abort_unless(\Gate::allows('city_show'), 403);

        return view('admin.cities.show', compact('city'));
    }

    public function destroy(City $city)
    {
        abort_unless(\Gate::allows('city_delete'), 403);

        $city->delete();

        return back();
    }
}
