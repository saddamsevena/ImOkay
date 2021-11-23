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
      <span class="v98_81">Day 11 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Eleventh Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Eleventh Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 12 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Twelvth Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Twelvth Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 13 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 14 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 15 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 16 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 17 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 18 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 19 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
    <div class="container" id="box">
      <span class="v98_81">Day 20 - How do I control my stress ?</span>
      <div class="kotakbiru1"></div>
      <a href="#" class="firstvideo">Second Day Video</a>
      <div class="kotakbiru2"></div>
      <a href="#" class="firstmodul">Second Day Modul</a>
    </div>
<div style="margin-left: 360px; margin-top: 300px">
  <ul class="pagination">
  <li><a href="{{ url('/selfhealing/view') }}">«</a></li>
  <li><a href="{{ url('/selfhealing/view') }}">1</a></li>
  <li><a class="active" href="{{ url('/selfhealing/view2') }}">2</a></li>
  <li><a href="{{ url('/selfhealing/view3') }}">3</a></li>
  <li><a href="{{ url('/selfhealing/view3') }}">»</a></li>
</ul>
</div>
@endsection