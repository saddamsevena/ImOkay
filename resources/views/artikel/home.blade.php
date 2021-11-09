@extends('layouts.app')

@section('content')
<section class="u-align-center u-clearfix u-section-1" id="sec-ff6a">
@if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif      
<div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Topik Terkini</h2>
        <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
          @foreach($artikelterbaru as $ar)
            <div class="u-active u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-2">
                <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-default u-image-1" data-image-width="1280" data-image-height="716" src="img/1.jpeg">
                <h4 class="u-align-center u-text u-text-default u-text-2">{{$ar->judul}}</h4>
                <p class="u-align-center u-text u-text-5">{{$ar->top_news}}</p>
              </div>
              @endforeach
            </div>
          <a class="u-carousel-control u-carousel-control-prev u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">+Previous</span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
        <div class="u-blog u-expanded-width u-blog-1">
      @if($artikel->isEmpty())
      <h1>Tidak ada artikel untuk dibaca</h1>
      @else
          <div class="u-repeater u-repeater-1">
          @foreach($artikel as $a)
            <div class="u-align-center u-black u-blog-post u-container-style u-repeater-item u-repeater-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <a class="u-post-header-link" href="/artikel/read/{{$a->id}}">
                  <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3" src="img/3.jpeg" data-image-width="809" data-image-height="1080">
                </a>
                <h4 class="u-blog-control u-text u-text-8">
                  <a class="u-post-header-link" href="/artikel/read/{{$a->id}}">{{ $a->judul }}</a>
                </h4>
                <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">
                  <span class="u-meta-date u-meta-icon">{{ $a->created_at }}</span>
                </div>
                <a href="/artikel/read/{{$a->id}}" class="u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-text-body-alt-color u-btn-1">Read More</a>
              </div>
              @endforeach
            @endif
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
