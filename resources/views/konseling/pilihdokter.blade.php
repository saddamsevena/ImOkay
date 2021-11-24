@extends('layouts.app')

@section('css')
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card img {
  border-radius: 5px;
}
@endsection

@section('content')

@if(Auth::check())
  @if(Auth::user()->role == 'User')
    <p class="h1">Hi {{Auth::user()->name}} </p>
    <p class="h5">
      Selamat datang di konseling I'm Okay! Kami akan membantu kamu dalam penanganan kesehatan mental bersama para psikolog berpengalaman!
     <br>
     <span class="h6">Silahkan pilih psikolog keinginanmu</span>
    </p>
  @endif
@endif
<p class="h5">Pilih Psikolog</p>

@foreach ($doctor as $dok)
<div class="card my-3">
  <div class="card-body">
    <div class="row">
      <div class="col-3 text-center">
        <img src="/storage/profil/img/{{ $dok->photo}}" width="150px">
      </div>
      <div class="col-9">
        <p class="h5 card-title">{{ $dok->name }}</p>
        <p class="card-text">Deskripsi</p>
      </div>
    </div>
  </div>
  <div class="card-footer text-muted text-end">
    <a href="https://wa.me/{{$dok->phone}}" class="btn btn-primary">Konsultasi Sekarang</a>
  </div>
</div>
@endforeach

<p class="h5">Kesehatan mental sangat penting untuk dijaga karena kesehatan mental merupakan salah satu alasan perasaan kamu saat ini. Selain konseling kamu juga bisa mengurangi anxiety dan stress dari diri sendiri kamu bisa coba 30 Hari Self Healing <a href="{{url('/artikel')}}"><u>disini</u></a></p>
@endsection