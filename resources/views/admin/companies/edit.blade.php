@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('global.edit') }} {{ trans('global.company.title_singular') }}
                    </div>
                    <div class="panel-body">

                        <form action="{{ route("admin.companies.update", [$company->id]) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('global.company.fields.name') }}</label>
                                <input type="text" id="name" name="name" class="form-control"
                                       value="{{ old('name', isset($company) ? $company->name : '') }}">
                                @if($errors->has('name'))
                                    <p class="help-block">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.company.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('city_id') ? 'has-error' : '' }}">
                                <label for="city">{{ trans('global.company.fields.city') }}</label>
                                <select name="city_id" id="city" class="form-control">
                                    @foreach($cities as $id => $city)
                                        <option value="{{ $id }}" {{ (isset($company) && $company->city ? $company->city->id : old('city_id')) == $id ? 'selected' : '' }}>
                                            {{ $city }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($errors->has('city_id'))
                                    <p class="help-block">
                                        {{ $errors->first('city_id') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                <label for="address">{{ trans('global.company.fields.address') }}</label>
                                <input type="text" id="address" name="address" class="form-control"
                                       value="{{ old('address', isset($company) ? $company->address : '') }}">
                                @if($errors->has('address'))
                                    <p class="help-block">
                                        {{ $errors->first('address') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.company.fields.address_helper') }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="categories">{{ trans('global.company.fields.categories') }}</label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach($categories as $id => $category)
                                        <option value="{{ $id }}" {{ in_array($id, old('categories', $company->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                                            {{ $category }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($errors->has('categories'))
                                    <p class="help-block">
                                        {{ $errors->first('categories') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="description">{{ trans('global.company.fields.description') }}</label>
                                <textarea id="description" name="description"
                                          class="form-control ">{{ old('description', isset($company) ? $company->description : '') }}</textarea>
                                @if($errors->has('description'))
                                    <p class="help-block">
                                        {{ $errors->first('description') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.company.fields.description_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                                <label for="logo">{{ trans('global.company.fields.new_logo') }}</label>
                                <input type="file" name="logo" class="form-control">
                                @if($errors->has('logo'))
                                    <p class="help-block">
                                        {{ $errors->first('logo') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.company.fields.logo_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                                <label>{{ trans('global.company.fields.current_logo') }}</label>
                                <div>
                                    @if($company->logo)
                                        <img src="{{ $company->logo->url }}" width="150px">
                                    @endif
                                </div>
                                @if($errors->has('logo'))
                                    <p class="help-block">
                                        {{ $errors->first('logo') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.company.fields.logo_helper') }}
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