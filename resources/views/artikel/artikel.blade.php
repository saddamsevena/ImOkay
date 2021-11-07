@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @foreach($artikel as $a)
                    <h1>{{ $a->judul }}</h1>
                    <t>{{ $a->created_at }}</t>
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
