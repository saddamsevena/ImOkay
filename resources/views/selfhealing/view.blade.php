@extends('layouts.app')
@section('css')
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

.pagination li:first-child a {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination li:last-child a {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd};
@endsection
@section('content')
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/viewselfhealing.css') }}" />
    <h2>
      Hi, {{ Auth::user()->name }}
      <br />
      Selamat Datang Di 30 Days Self-Healing Program
      <br />
      Keep Positive and Happy
    </h2>
    <div class="container" id="box">
      <span class="v98_81">Day 1 - How do I control my panic attack ?</span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=JaEeQdGAnGo" class="firstvideo">First Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/1uNEOXmZqf75m7_kxn1nLF73IJ9FWWID0/view?usp=sharing" class="firstmodul">First Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 2 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=O6X3KH1TmeM&ab_channel=ClarinHayes" class="firstvideo" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/1OIkhiATqxuWZMrUgTZEFzK_-vEcjWg3X/view?usp=sharing" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 3 - How do I control my insecurities ?</span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=BOeh9RMlwwc&ab_channel=SatuPersen-IndonesianLifeSchool" class="firstvideo">Third Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://dosenpsikologi.com/insecure-dalam-psikologi" class="firstmodul">Third Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 4 - Self Healing </span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=U6qeW1MoK9s&ab_channel=SatuPersen-IndonesianLifeSchool" class="firstvideo">Fourth Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/1ekZwKspFLwbwwp4faw1sMM2AZKM8yto-/view?usp=sharing" class="firstmodul">Fourth Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 5 - What is depression and how do i handle it ?</span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=wr2IqS8bsS4&ab_channel=Neuron" class="firstvideo">Fifth Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/17_q7nRfDgH3ioGvQqW985pau1cV-sr0m/view?usp=sharing" class="firstmodul">Fifth Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 6 - Difference between stress and depression ?</span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=HbJLJY4nswA&ab_channel=ChodidjahMakarim" class="firstvideo">Sixth Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://www.sehatq.com/artikel/sering-dianggap-sama-ini-perbedaan-stres-dan-depresi" class="firstmodul">Sixth Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 7 - How do I control my overthinking ?</span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=NbIJDsAeZNU&ab_channel=SatuPersen-IndonesianLifeSchool" class="firstvideo">Seventh Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/1I6yOzao_jZWRzPDM_nuQJEyQD4n9E28t/view?usp=sharing" class="firstmodul">Seventh Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 8 - Self Love </span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=bSy4jf36sTA&ab_channel=Greatmind" class="firstvideo">Eighth Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/1ATQZFHfCXNrdDttaVRRvkArTx8wCnv5R/view?usp=sharing" class="firstmodul">Eighth Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 9 - Meditation </span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=ozaFsRbcC4o&ab_channel=SatuPersen-IndonesianLifeSchool" class="firstvideo">Ninth Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/1VcpBwZ5CJyhGQLM7s9iYG8-_aWAxFlrx/view?usp=sharing" class="firstmodul">Ninth Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 10 - Accept failure and forgive yourself </span>
      <div class="kotakbiru1"></div>
      <a href="https://www.youtube.com/watch?v=sYnglFLox4U&ab_channel=SatuPersen-IndonesianLifeSchool" class="firstvideo">Tenth Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="https://drive.google.com/file/d/1lB6W5m-29cfEsIBIpjoMJxbu57Res495/view?usp=sharing" class="firstmodul">Tenth Day Modul</a>
    </div>
<div style="margin-left: 360px; margin-top: 300px">
<ul class="pagination">
  <li><a href="#">«</a></li>
  <li><a class="active"  href="{{ url('/selfhealing/view') }}">1</a></li>
  <li><a href="{{ url('/selfhealing/view2') }}">2</a></li>
  <li><a href="{{ url('/selfhealing/view3') }}">3</a></li>
  <li><a href="{{ url('/selfhealing/view2') }}">»</a></li>
</ul>
</div>
@endsection
