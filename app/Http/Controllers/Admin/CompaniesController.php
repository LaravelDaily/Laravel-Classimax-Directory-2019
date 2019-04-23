<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompaniesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_unless(\Gate::allows('company_access'), 403);

        $companies = Company::all();

        $link = env('APP_URL');

        return view('admin.companies.index', compact('companies', 'link'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('company_create'), 403);

        $cities = City::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $categories = \App\Category::pluck('name', 'id');


        return view('admin.companies.create', compact('cities', 'categories'));
    }

    public function store(StoreCompanyRequest $request)
    {
        abort_unless(\Gate::allows('company_create'), 403);

        $company = Company::create($request->all());
        $company->categories()->sync(array_filter((array)$request->input('categories')));


        if ($request->logo) {
            $company->addMediaFromRequest('logo')->toMediaCollection();
            $company->save();
        }

        return redirect()->route('admin.companies.index');
    }

    public function edit(Company $company)
    {
        abort_unless(\Gate::allows('company_edit'), 403);

        $cities = City::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $categories = \App\Category::pluck('name', 'id');

        $company->load('city');

        return view('admin.companies.edit', compact('cities', 'categories', 'company'));
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        abort_unless(\Gate::allows('company_edit'), 403);

        $company->update($request->all());
        $company->categories()->sync(array_filter((array)$request->input('categories')));

        if ($request->logo) {
            $company->logo->delete();
            $company->addMediaFromRequest('logo')->toMediaCollection();
            $company->save();
        }

        return redirect()->route('admin.companies.index');
    }

    public function show(Company $company)
    {
        abort_unless(\Gate::allows('company_show'), 403);

        $company->load('city');

        return view('admin.companies.show', compact('company', 'link'));
    }

    public function destroy(Company $company)
    {
        abort_unless(\Gate::allows('company_delete'), 403);

        $company->delete();

        return back();
    }
}
