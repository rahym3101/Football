@extends('layouts.app')
@section('title')
    FOOTBALL
@endsection
@section('content')
    <div class="text-success text-center mb-2 mt-4 py-2 fw-bold">
        <h1>{{$team->name}}</h1>
    </div>
    @auth
        @include('app.main')
        <div class="h1 text-success mt-0 text-decoration-none fw-semibold text-center mb-4">
            @lang('app.games'):
        </div>
        @foreach($games as $game)
            @if($team->name != $game->opponent)
                <div class="col text-center py-4">
                    <div class="text-dark fw-semibold">
                        <h5>
                            {{ $game->sort}}
                        </h5>
                    </div>
                    <div class="row text-success">
                        <h1>
                            <img src="{{ asset('img/teams/' . $team->id . '.png') }}" alt="{{ $team->name }}" class="img-fluid" style="height:3rem";>
                            {{ $team->name }}
                            - {{$game->opponent}}
                            <img src="{{ asset('img/opponent/' . $game->opponent . '.png') }}" alt="{{ $game->opponent }}" class="img-fluid" style="height:3rem";>
                        </h1>
                    </div>
                    <div>
                        <h5>
                            {{ $game->date }}. {{ $game->kickoff}}
                        </h5>
                    </div>
                </div>
            @endif
        @endforeach
    @endauth
@endsection