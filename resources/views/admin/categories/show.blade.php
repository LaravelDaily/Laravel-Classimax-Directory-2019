@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.category.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.category.fields.name') }}
                                </th>
                                <td>
                                    {{ $category->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.category.fields.icon') }}
                                </th>
                                <td>
                                    {{ $category->icon }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Company
                                </th>
                                <td>
                                    @foreach($category->companies as $id => $company)
                                        <span class="label label-info label-many">{{ $company->name }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection