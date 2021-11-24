@extends('layouts.app')

@section('content')
<div class="container">
@foreach($artikel as $a)
        <div class="col-md-8 col-md-offset-2">
            <h2>{{$a->judul}}</h2><hr/>
            <img src="/storage/article/img/{{ $a->foto }}" width="100%" alt="...">
            {{ $a->isi_artikel }}
        </div>
        @endforeach
    </div>
@endsection
