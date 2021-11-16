@extends('layouts.app')
@section('css')
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 60%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 25px;
}
@endsection
@section('content')
<!-- START HEAD -->
<div class="row">
    @if(Auth::check())
    @if(Auth::user()->role == 'User')
    <div class="col-10">
        <h1>Hi {{Auth::user()->name}} </h1>
        <p>
          Selamat datang di konseling I'm Okay! Kami akan membantu kamu dalam penanganan kesehatan mental
          bersama para psikolog berpengalaman!
          <br> Silahkan pilih psikolog keinginanmu
        </p>
    </div>
    @endif
    @endif
    <h5>Pilih Psikolog</h5>
</div>
<!-- END HEAD -->
@foreach ($doctor as $dok)
<div class="card">
    <img src="img_avatar.png" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b>{{ $dok->name }}</b></h4>
        <a href="https://wa.me/{{$dok->phone}}">
          <button class="test">Konsultasi Sekarang</button>
        </a>
    </div>
</div>
@endforeach

<div class="row">
    <div class="col-10">
        <p>
        Kesehatan mental sangat penting untuk dijaga
          karena kesehatan mental merupakan salah satu alasan perasaan
          kamu saat ini. Jika kamu tertarik lebih kamu bisa membaca artikel
          kesehatan mental <a href="{{url('/artikel')}}">disini </a>
        </p>
        <p>
        Selain konseling kamu juga bisa mengurangi anxiety dan stress
        dari diri sendiri kamu bisa coba 30 Hari Self Healing <a href="{{url('/artikel')}}">disini </a>
        </p>
    </div>
</div>
@endsection