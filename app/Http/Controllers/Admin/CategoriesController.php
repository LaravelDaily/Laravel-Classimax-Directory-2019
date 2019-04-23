<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('category_access'), 403);

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('category_create'), 403);

        $companies = Company::all()->pluck('name', 'id');

        return view('admin.categories.create', compact('companies'));
    }

    public function store(StoreCategoryRequest $request)
    {
        abort_unless(\Gate::allows('category_create'), 403);

        $category = Category::create($request->all());
        $category->companies()->sync($request->input('companies', []));

        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        abort_unless(\Gate::allows('category_edit'), 403);

        $companies = Company::all()->pluck('name', 'id');

        $category->load('companies');

        return view('admin.categories.edit', compact('companies', 'category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        abort_unless(\Gate::allows('category_edit'), 403);

        $category->update($request->all());
        $category->companies()->sync($request->input('companies', []));

        return redirect()->route('admin.categories.index');
    }

    public function show(Category $category)
    {
        abort_unless(\Gate::allows('category_show'), 403);

        $category->load('companies');

        return view('admin.categories.show', compact('category'));
    }

    public function destroy(Category $category)
    {
        abort_unless(\Gate::allows('category_delete'), 403);

        $category->delete();

        return back();
    }
}
