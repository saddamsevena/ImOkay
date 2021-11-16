@extends('layouts.app')

@section('content')
<body>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/selfhealing.css') }}" />
    <div class="atas">
      <div class="orgpusing"></div>
      <h1>30 Days Self Healing Program</h1>
      <span class="v91_17"
        >Membantu dirimu untuk mengendalikan ketakutan, tingkat kestressan dan
        kepanikan yang terjadi dengan mengikuti daily activity pada program ini.
        Selama 30 hari tersebut akan diberikan kegiatan - kegiatan serta video
        yang dapat dilakukan untuk dapa mengurangi gejala yang anda alami
      </span>
    </div>
    <div class="bagiantengah">
      <div class="kotakbiru1"></div>
      <div class="kotakbiru2"></div>
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
      <a href="{{ url('/') }}">
        <button class="joinnow" type="button">
          Join Now
        </button>
      </a>
    </div>
  </body>
@endsection
