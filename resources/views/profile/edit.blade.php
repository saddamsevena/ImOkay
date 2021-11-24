@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Update Profile</h2>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('profile.update')}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="{{$user->id}}">
            </div>
        </div>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row" style="padding: 10px">
    <div class="col-md-10">
        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" autocomplete="name" placeholder="Nama Lengkap">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row" style="padding: 10px">
    <div class="col-md-10">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" autocomplete="email" placeholder="Email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row" style="padding: 10px">
    <div class="col-md-10">
        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone}}" autocomplete="phone" autofocus placeholder="Nomor HP">

        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row" style="padding: 10px">
    <div class="col-md-10">
        <input id="birth" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ $user->tgl_lahir}}" autocomplete="date" autofocus placeholder="Tanggal Lahir">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row" style="padding: 10px">
    <div class="col-md-10">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password" value="{{$user->password}}">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<!-- <div class="form-group row" style="padding: 10px">
    <div class="col-md-10">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Konfirmasi Password">
    </div>
</div> -->

<div class="form-group row">
    <div class="col-md-10" style="padding-left: 25px">
        <input id="Perempuan" type="radio" class="" name="jenis_kelamin" value="Perempuan"> Perempuan
        <input id="Laki-Laki" type="radio" class="" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
    </div>
</div>

<div class="form-group row" style="padding: 10px">
    <div class="col-md-10">
    <input type="file" name="photo" class="form-control" placeholder="photo" value="{{ $user->photo}}">

        @error('phoyo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection