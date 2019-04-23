@extends('layouts.admin')
@section('content')
<div class="content">
    @can('category_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.categories.create") }}">
                    {{ trans('global.add') }} {{ trans('global.category.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.category.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.category.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('global.category.fields.icon') }}
                                    </th>
                                    <th>
                                        {{ trans('global.category.fields.company') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td>
                                            {{ $category->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $category->icon ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($category->companies as $key => $item)
                                                <span class="label label-info label-many">{{ $item->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('category_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.categories.show', $category->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('category_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.categories.edit', $category->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('category_delete')
                                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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