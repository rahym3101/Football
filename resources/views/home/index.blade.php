@extends('layouts.app')
@section('title')
    FOOTBALL
@endsection
@section('content')
    <div class="container-xl">
        <div class="h1 text-center py-5">
            <div class="mb-4">
                Siz haysy toparyn fanady?
            </div>
            <div class="row g-4">
                <div class="align-items-center g-4 m-4">
                    @foreach($teams as $team)
                        <a href="{{ route('home', $team->id) }}" class="text-decoration-none">
                            <img src="{{ asset('img/teams/' . $team->id . '.png') }}" alt="{{ $team->name }}" class="img-fluid" style="height:12rem";>
                            <div class="text-center h5 text-dark">
                                {{ $team->name }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection