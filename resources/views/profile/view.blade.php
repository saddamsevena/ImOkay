@extends('layouts.app')

@section('content')
@foreach($user as $users)
<div class="card">
    <img src="/storage/profil/img/{{ $users->photo }}" width="100px">
    <div class="container">
        <h4><b>{{ $users->name }}</b></h4>
        <a href="{{ route('profile.edit',$users->id) }}">Edit Profile</a>
    </div>
</div>
@endforeach
@endsection