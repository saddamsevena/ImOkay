@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- DISINI TARO IF ROLE = ADMIN biar tombol create muncul-->
                    <a href="{{ route('artikel.create') }}">Artikel Baru</a><br>
                    <!-- ENDIF -->
                    @if($artikel->isEmpty())
                    <h1>Tidak ada artikel untuk dibaca</h1>
                    @else
                    @foreach($artikel as $a)
                    <a href='/artikel/read/{{ $a->id }}'>{{ $a->judul }}</a>
                    <t>{{ $a->updated_at }}</t>
                    <!-- DISINI TARO IF ROLE = ADMIN biar tombol create muncul-->
                    <a href="/artikel/delete/{{ $a->id }}">Hapus</a>
                     <!-- ENDIF -->
                </div>
                
                @endforeach
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
