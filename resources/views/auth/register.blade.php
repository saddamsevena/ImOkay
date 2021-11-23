@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 style="text-align: center; padding: 15px">{{ __('Register') }}</h5>

                <div class="card-body row row-cols-2">
                    <div>
                        <form method="POST" action="{{ route('register') }}" class="offset-md-1 col">
                            @csrf

                            <div class="form-text row">
                                <div class="col-md-10">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Panjang">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-text row">
                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-text row">
                                <div class="col-md-10">
                                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Nomor HP">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-text row">
                                <div class="col-md-10">
                                    <input id="birth" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus placeholder="Tanggal Lahir">

                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-text row">
                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-text row">
                                <div class="col-md-10">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10" style="padding-left: 26px">
                                    <input id="doctor" type="radio" class="" name="role" required value="Doctor"> Doctor
                                    <br>
                                    <input id="user" type="radio" class="" name="role" required value="User"> User
                                </div>
                            </div>

                            <div class="form-text row">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-secondary col-md-12">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="" style="border-left: 1px solid black">
                        <p style="text-align: center">Masuk dengan :</p>
                        <div style="border: 1px solid" class="card">
                            <ul class="justify-content-center list-unstyled d-flex bg-white">
                                <li><a class="btn btn-danger" href="#" style="font-size: 10px"><img src="/images/google.svg" alt="Google" width="20">Masuk dengan Google</a></li>
                                <li><a class="btn btn-primary" href="#" style="font-size: 10px"><img src="/images/fb.png" alt="Facebook" width="20">Masuk dengan Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-sm border-top">
                    <p style="text-align: center">Sudah punya akun? Login <a style="color: blue" href="{{ route('login') }}"><u>{{ __('disini') }}</u></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection