@extends('layouts.master')

@section('bodyclass')
    <body>
@endsection
@section('jumbotron')
<div class="jumbotron bg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="display-4">@lang('messages.login.title')</h1>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container pt-5 pb-4">
    <div class="d-md-flex flex-row">
        <div class="col-md-4">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="form-label">@lang('messages.login.username')</label>
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                        @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                </div>

                <div class="mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="form-label">@lang('messages.login.password')</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="mb-3">             
                <div class="checkbox">
                    <label class="form-label">
                    @lang('messages.login.dont')
                    <a href="{{ route('register') }}"><strong> @lang('messages.login.sign')</strong></a>
                    </label>
                </div>
                <div class="checkbox">
                    <label class="form-label">
                    @lang('messages.login.forgot')
                    <a href="{{ route('password.request') }}"><strong> @lang('messages.login.click')</strong></a>
                    </label>
                </div>
                </div>
                <div class="mb-3">                    
                    <button type="submit" class="btn btn-primary btnpoint">
                        @lang('messages.login.button')
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
