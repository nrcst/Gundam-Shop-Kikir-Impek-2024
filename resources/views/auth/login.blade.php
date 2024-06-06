@extends('layouts.app')

@section('content')
<div class="container m-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm"
                style="border-radius: 15px; background-color: #f0e3d4; border: 1px solid; border-color: #6f4e37;">
                <div class="card-header"
                    style="border-top-left-radius: 15px; border-top-right-radius: 15px; background-color: #6f4e37;">
                    <h4 class="m-2 mt-3" style="color: #fff8e3;">{{ __('Login') }}</h4>
                </div>

                <div class="card-body" style="color: #6f4e37;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    style="background-color: #fff8e3; border-color: #6f4e37;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password"
                                    style="background-color: #fff8e3; border-color: #6f4e37;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                        style="background-color: #fff8e3; border-color: #6f4e37;">

                                    <label class="form-check-label" for="remember" style="color: #6f4e37;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #6f4e37; border-color: #6f4e37; color: #fff8e3;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #6f4e37;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection