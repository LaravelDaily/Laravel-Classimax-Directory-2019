<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyApiController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return $companies;
    }

    public function store(StoreCompanyRequest $request)
    {
        return Company::create($request->all());
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        return $company->update($request->all());
    }

    public function show(Company $company)
    {
        return $company;
    }

    public function destroy(Company $company)
    {
        return $company->delete();
    }
}
