@extends('layouts.app')

@section('content')
<form class="register-form" method="POST" action="{{ route('register') }}">

    <div class="register-name field">
        <div class="label-wrapper">
             <i class="far fa-user"></i>
            <label for="name" class="">{{ __('Name') }}</label>       
        </div>               
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>                               
        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        </div>
    <div class="register-email field">
        <div class="label-wrapper">
            <i class="far fa-envelope"></i>
            <label for="email" class="">{{ __('E-Mail Address') }}</label>
        </div>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >                               
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="register-password field">
        <div class="label-wrapper">
            <i class="fas fa-lock"></i>
            <label for="password" class="">{{ __('Password') }}</label>
        </div>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>   
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    <div class="register-confirm field">
        <div class="label-wrapper">
            <i class="fas fa-lock"></i>
            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
        </div>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
    <div class="register-button field">
       <button type="submit" >
          {{ __('Register') }}
    </button>
    </div>
</form>
   
@endsection
