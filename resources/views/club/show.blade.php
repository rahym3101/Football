@extends('layouts.app')
@section('title')
    FOOTBALL
@endsection
@section('content')
    @auth
        <div class="container-xl py-4">
            <div class="border rounded shadow-sm p-3">
                <div class="d-flex justify-content-between">
                    <div class="container-xl">
                        <div class="mb-4 py-4 align-items-end row text-center">
                            {{--<div>--}}
                            {{--<h1>{{$team->name}}</h1>--}}
                            {{--</div>--}}
                            <div class="row">
                                <a class="router-link-exact-active fw-semibold text-decoration-none text-success col-3">
                                    <h2>
                                        Games
                                    </h2>
                                </a>
                                <a href="{{route('club.player', $players->id) }}" class="router-link-exact-active fw-semibold text-decoration-none text-success col-3">
                                    <h2>
                                        Players
                                    </h2>
                                </a>
                                <a class="router-link-exact-active fw-semibold text-decoration-none text-success col-3">
                                    <h2>
                                        Posts
                                    </h2>
                                </a>
                                <a class="router-link-exact-active fw-semibold text-decoration-none text-success col-3">
                                    <h2>
                                        Coaches
                                    </h2>
                                </a>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div>
                                <h4>
                                    {{ $club->game->sort}}
                                </h4>
                            </div>
                            <div class="row">
                                <h4>
                                    {{$team->name}}
                                </h4>
                                <h4>
                                    {{$team->opponent}}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection