@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('global.category.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.categories.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('global.category.fields.name') }}</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($category) ? $category->name : '') }}">
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.category.fields.name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('icon') ? 'has-error' : '' }}">
                            <label for="icon">{{ trans('global.category.fields.icon') }}</label>
                            <input type="text" id="icon" name="icon" class="form-control" value="{{ old('icon', isset($category) ? $category->icon : '') }}">
                            @if($errors->has('icon'))
                                <p class="help-block">
                                    {{ $errors->first('icon') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.category.fields.icon_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('companies') ? 'has-error' : '' }}">
                            <label for="company">{{ trans('global.category.fields.company') }}
                                <span class="btn btn-info btn-xs select-all">Select all</span>
                                <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                            <select name="companies[]" id="companies" class="form-control select2" multiple="multiple">
                                @foreach($companies as $id => $company)
                                    <option value="{{ $id }}" {{ (in_array($id, old('companies', [])) || isset($category) && $category->companies->contains($id)) ? 'selected' : '' }}>
                                        {{ $company }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('companies'))
                                <p class="help-block">
                                    {{ $errors->first('companies') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.category.fields.company_helper') }}
                            </p>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection