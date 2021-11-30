@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 row row-cols-2">
            <div class="col card bg-transparent" style="border: 0px">
                <br><br>
                <img class="bg-black" src="{{ asset('images/Logo.png') }}" alt="logo" height=150 style="padding: 15px">
            </div>
            <div class="card col">
                <h5 style="text-align: center">{{ __('Sign in') }}</h5>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="offset-md-1">
                        @csrf

                        <div class="form-text row">
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email atau Ponsel">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-text row">
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row" style="padding-left: 1px">
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-danger" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <br> <br>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    <div class="border-top">
                        <p style="text-align: center">Belum punya akun? Buat <a style="color: blue" href="{{ route('register') }}"><u>{{ __('disini') }}</u></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection