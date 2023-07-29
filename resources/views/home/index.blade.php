@extends('layouts.app')
@section('title')
    FOOTBALL
@endsection
@section('content')
    <div class="container-xl">
        <div class="h1">
            Siz haysy toparyn fanady?
        </div>
        @foreach($teams as $team)
            <a href="{{ route('home', $team->id) }}" class="text-decoration-none">
                <img src="{{ asset('img/teams/' . $team->id . '.png') }}" alt="{{ $team->name }}" class="img-fluid">
            </a>
        @endforeach
    </div>
@endsection