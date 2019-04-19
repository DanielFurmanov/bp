@extends('layouts.admin.general')
@section('content')
    <form id="login_form" class="form-horizontal p-3 m-auto" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">@lang('field.email')</label>

            <div >
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">@lang('field.password')</label>

            <div >
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-primary">
                    Войти
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
            </div>
        </div>
    </form>
@endsection
