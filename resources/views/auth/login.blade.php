@extends('layouts.app') 
@section('content')


<form class="login-form" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="register-email field">
        <div class="label-wrapper">
            <i class="far fa-envelope"></i>
            <label for="email" class="">{{ __('E-Mail Address') }}</label>
        </div>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
            required autofocus> @if ($errors->has('email'))
        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
    </div>


    <div class="register-password field">
        <div class="label-wrapper">
            <i class="fas fa-lock"></i>
            <label for="password" class="">{{ __('Password') }}</label>
        </div>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
            required> @if ($errors->has('password'))
        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
    </div>


    <div class="checkbox">
        <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>

    </div>

    <div class="form-group">
        <div class="login-button">
            <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

            <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
        </div>
    </div>
</form>
@endsection