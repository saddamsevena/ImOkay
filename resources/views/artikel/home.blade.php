@extends('layouts.app')

@section('content')
<section class="align-items-center u-section-1" id="">
  @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
  @endif      
  <div class="container card">
    <h2 class="text-center">Topik Terkini</h2>
    <div id="topnews" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($artikelterbaru as $ar)
          <div class="carousel-item active">
            <div class="container">
              <img alt="" class="d-block w-100" src="/storage/article/img/{{ $ar->foto }}">
            </div>
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#topnews" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#topnews" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="u-blog u-expanded-width u-blog-1">
      @if($artikel->isEmpty())
        <h1>Tidak ada artikel untuk dibaca</h1>
      @else  
        @foreach($artikel as $a)
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-black u-blog-post u-container-style u-repeater-item u-repeater-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-12">
                <a class="u-post-header-link" href="/artikel/read/{{$a->id}}">
                  <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3" src="/storage/article/img/{{ $a->foto }}" data-image-width="809" data-image-height="1080">
                </a>
                <h4 class="u-blog-control u-text u-text-8">
                  <a class="u-post-header-link" href="/artikel/read/{{$a->id}}">{{ $a->judul }}</a>
                </h4>
                <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">
                  <span class="u-meta-date u-meta-icon">{{ $a->created_at }}</span>
                </div>
                <a href="/artikel/read/{{$a->id}}" class="u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-text-body-alt-color u-btn-1">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
@endsection
