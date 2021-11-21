@extends('layouts.app')

@section('css')
.icon {
    background-color: #0f609f;
    padding: 17px;
    font-size: 60px;
    color: white;
    border-radius: 10px;
    width: 100px;
    height: 100px;
}
.highlight {
    color: #0f609f;
}
.carousel-inner  {
    min-width: 400px;
    min-height: 200px;
    background-color: #9cd4e46b;
    border-radius: 10px;
}
@endsection

@section('content')
<!-- START HEAD -->
<div class="row">
    <div class="col-6">
        <p class="h1">Langkah awal mengenali gejala gangguan kesehatan mental.</p>
        <button type="button" class="btn btn-secondary"><a href="">Start Test</a></button>
    </div>
    <div class="col-6 text-end">
        <img src="{{ asset('images/HomeIMG.png') }}" width=400>
    </div>
</div>
<!-- END HEAD -->

<!-- START LAYANAN -->
<div class="row justify-content-center align-items-center my-3">
    <div class="col-12 text-center">
        <p class="h4"><b>LAYANAN <span class="highlight">I'M OKAY</span></b></p>
    </div>
    <div class="col-2 text-center">
        <i class="fas fa-tasks icon"></i>
    </div>
    <div class="col-3">
        <p>30 Days Self Healing Program untuk membantu perkembangan kesehatan mental</p>
    </div>
    <div class="col-3 text-end">
        <p>Free Quick Test Mental Health untuk mengetahui diagnosa awal kesehatan mental</p>
    </div>
    <div class="col-2 text-center">
        <i class="fas fa-stopwatch icon"></i>
    </div>
    <div class="w-100"></div>
    <div class="col-2 text-center">
        <i class="fas fa-comment-alt icon"></i>
    </div>
    <div class="col-3">
        <p>Konsultasi online dengan para psikolog yang berpengalaman</p>
    </div>
    <div class="col-3 text-end">
        <p>Artikel dan juga berita terbaru terkait kesehatan mental di dunia</p>
    </div>
    <div class="col-2 text-center">
        <i class="fas fa-newspaper icon"></i>
    </div>
</div>
<!-- END LAYANAN -->

<!-- START TESTIMONIAL -->
<div class="row justify-content-center align-items-center my-3">
    <div class="col-12 text-center">
        <p class="h4"><b>TESTIMONIAL <span class="highlight">I'M OKAY</span></b></p>
    </div>
    <div class="col-10 text-center">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p><b>"Testi 1"</b></p>
                    <p class="text-muted">- Orang 1</p>
                </div>
                <div class="carousel-item">
                    <p><b>"Testi 2"</b></p>
                    <p class="text-muted">- Orang 2</p>
                </div>
                <div class="carousel-item">
                    <p><b>"Testi 3"</b></p>
                    <p class="text-muted">- Orang 3</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>
<!-- END TESTIMONIAL -->
@endsection