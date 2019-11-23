@extends('master')
@section('title')
    Register
@endsection
@section('content')
<div class="wrapper">
    <div class="page-header" style="background-image: url('../assets/img/sections/soroush-karimi.jpg');">
      <div class="filter"></div>
      <div class="container">
        <div class="row" >
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mr-auto" style="margin-top:10%">
            <div class="card card-register center">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                    <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control no-border @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control no-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-control no-border @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" type="password" no-border class="form-control" name="password_confirmation" required autocomplete="new-password">
                   
                <div class="form-group row mb-0">
                    <div style="margin-right:auto;margin-left:auto;display:block">
                        <button type="submit" class="btn btn-danger">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <hr>
                <div class="text-center">or register with</div>
                <div class="text-center" style="margin-top:-25px;">
                    <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                    <button href="#paper-kit" class="btn btn-just-icon btn-google"><i class="fa fa-google"></i></button>
                    <button href="#paper-kit" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
