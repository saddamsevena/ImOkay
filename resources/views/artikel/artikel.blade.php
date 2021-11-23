@extends('layouts.app')

@section('content')
<section class="u-align-center u-clearfix u-section-1" id="sec-f0bf">
@foreach($artikel as $a)
  <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
    <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
      <div class="u-container-layout u-valign-middle u-container-layout-1">
        <h2 class="u-blog-control u-text u-text-1">{{ $a->judul }}</h2>
        <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3" src="img/3.jpeg" data-image-width="809" data-image-height="1080">
        <div class="u-blog-control u-metadata u-metadata-1">
          <span class="u-meta-date u-meta-icon">{{ $a->created_at }}</span>
        </div>
        <div class="u-align-justify u-blog-control u-post-content u-text u-text-2 fr-view">
          <p>{{ $a->isi_artikel }}</p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</section>
@endsection