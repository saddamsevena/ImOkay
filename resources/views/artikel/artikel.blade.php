@extends('layouts.app')

@section('content')
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @foreach($artikel as $a)
                    <!-- DISINI TARO IF ROLE = ADMIN -->
                    <a href="/artikel/edit/{{ $a->id }}">Edit</a>
                    <!-- ENDIF -->
                    <h1>{{ $a->judul }}</h1>
                    <t>Dibuat pada : {{ $a->created_at }}&ensp;& terakhir diedit pada {{ $a->updated_at }}</t>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ $a->isi_artikel }}</p>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
