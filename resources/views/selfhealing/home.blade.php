@extends('layouts.app')

@section('content')
  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/selfhealing.css') }}" />
    <div class="container" id="atas">
      <div class="container" id="orgpusing" style="background-image: url('{{ asset('img/abc1.png')}}');"></div>
      <h1 id="judul">30 Days Self Healing Program</h1>
      <span class="col-8" id="tulisan" 
        >Membantu dirimu untuk mengendalikan ketakutan, tingkat kestressan dan
        kepanikan yang terjadi dengan mengikuti daily activity pada program ini.
        Selama 30 hari tersebut akan diberikan kegiatan - kegiatan serta video
        yang dapat dilakukan untuk dapa mengurangi gejala yang anda alami
      </span>
    </div>
    <div class="container" id="bagiantengah">
      <div class="row" id="kotakbiru1" style="background-image: url('{{ asset('img/layanan1.png')}}');"></div>
      <div class="row" id="kotakbiru2" style="background-image: url('{{ asset('img/play.png')}}');"></div>
      <div class="layanan">
        <span class="layanan1">
          30 Days Modules - Modul modul yang berisi tentang "bagaimana cara"
          mulai dari mengurangi rasa takut, mengatasi panic attack dan
          dilengkapi kegiatan-kegiatan yang bisa dilakukan untuk mengurangi hal
          tersebut.
        </span>
        <span class="layanan2">
          30 Days Vidio - video teori harian dengan informasi psikoedukatif.
          Teori ini membantu Anda membangun motivasi untuk melakukan kegiatan -
          kegiatan yang bermanfaat dan mengurangi rasa panik, takut, dan cemas.
        </span>
      </div>
      <a href="{{ url('/selfhealing/view') }}">
        <button class="joinnow" type="button">
          Join Now
        </button>
      </a>
    </div>
@endsection
