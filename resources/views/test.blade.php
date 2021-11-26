@extends('layouts.app')

@section('css')
.topik {
  /*min-width: 400px;
  min-height: 200px;
  background-color: #caa278;
  border-radius: 10px;
  margin: 5px 50px 5px 50px;*/
}
.topik img {
  width: 400px;
  height: 200px;
  object-fit: cover; /* Equivalent of the background-size: cover; of a background-image */
  object-position: center;
  border-radius: 10px;
  margin: 5px 50px 5px 50px;
}
@endsection

@section('content')
<div class="row">
  <div class="col-12 text-center">
    <p class="h1">TOPIK TERKINI</p>
    <div class="gerak">
      @foreach($artikel as $a)
    <div class="topik">
      <a href="/">
      <img src="https://pbs.twimg.com/profile_images/1455859199892623362/GmGAE69V_400x400.jpg">
      <p class="h5">{{$a->judul}}</p>
    </a>
    </div>
    @endforeach
    <div class="topik"><p>2</p></div>
    <div class="topik"><p>3</p></div>
    </div>
  </div>
   <script type="text/javascript">
    $(document).ready(function(){
      $('.gerak').slick();
    });
  </script>
</div>
@endsection
