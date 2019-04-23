@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#">
            {{ trans('global.site_title') }}
        </a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">
            {{ trans('global.reset_password') }}
        </p>
        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" required="required"="autofocus" placeholder="{{ trans('global.login_email') }}">
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-6">

                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.reset_password') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection