@extends('layouts.admin')
@section('content')
    <div class="content">
        @can('company_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route("admin.companies.create") }}">
                        {{ trans('global.add') }} {{ trans('global.company.title_singular') }}
                    </a>
                </div>
            </div>
        @endcan
        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('global.company.title_singular') }} {{ trans('global.list') }}
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped datatable">
                                <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.company.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('global.company.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('global.company.fields.categories') }}
                                    </th>
                                    <th>
                                        {{ trans('global.company.fields.address') }}
                                    </th>
                                    <th>
                                        {{ trans('global.company.fields.description') }}
                                    </th>
                                    <th>
                                        {{ trans('global.company.fields.logo') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $key => $company)
                                    <tr>
                                        <td>
                                            {{ $company->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $company->city->name ?? '' }}
                                        </td>
                                        <td>
                                            @foreach ($company->categories as $singleCategories)
                                                <span class="label label-info label-many">{{ $singleCategories->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $company->address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $company->description ?? '' }}
                                        </td>
                                        <td>
                                            @if($company->logo)
                                                <a href="{{ $company->logo->url }}" target="_blank">
                                                    <img src="{{ $company->logo->url }}" width="150px">
                                                </a>
                                            @endif
                                        </td>

                                        <td>
                                            @can('company_show')
                                                <a class="btn btn-xs btn-primary"
                                                   href="{{ route('admin.companies.show', $company->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('company_edit')
                                                <a class="btn btn-xs btn-info"
                                                   href="{{ route('admin.companies.edit', $company->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('company_delete')
                                                <form action="{{ route('admin.companies.destroy', $company->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                      style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger"
                                                           value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection