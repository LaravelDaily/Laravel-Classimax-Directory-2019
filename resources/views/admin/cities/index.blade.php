@extends('layouts.admin')
@section('content')
<div class="content">
    @can('city_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.cities.create") }}">
                    {{ trans('global.add') }} {{ trans('global.city.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.city.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.city.fields.name') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cities as $key => $city)
                                    <tr>
                                        <td>
                                            {{ $city->name ?? '' }}
                                        </td>
                                        <td>
                                            @can('city_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.cities.show', $city->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('city_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.cities.edit', $city->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('city_delete')
                                                <form action="{{ route('admin.cities.destroy', $city->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
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