@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('global.show') }} {{ trans('global.company.title') }}
                    </div>
                    <div class="panel-body">

                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.company.fields.name') }}
                                </th>
                                <td>
                                    {{ $company->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.company.fields.address') }}
                                </th>
                                <td>
                                    {{ $company->address }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.company.fields.description') }}
                                </th>
                                <td>
                                    {{ $company->description }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.company.fields.logo') }}
                                </th>
                                <td>
                                    @if($company->logo)
                                        <img src="{{ $company->logo->url }}" width="150px">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.company.fields.city') }}
                                </th>
                                <td>
                                    {{ $company->city->name }}
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