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
            @lang('app.players'):
        </div>
        <div>
            <div class="container-xl">
                <div class="row">
                    @foreach($players as $player)
                        <div class="text-center text-success col-6 py-2">
                            <div class="h2 d-flex">
                                {{ $player->name}}
                                {{ $player->surname}}
                                ∙ {{ $player->position->getName()}}    ∙
                                <div class="h2">
                                    ∙ @lang('app.nations'):
                                </div>
                            </div>
                            <div class="h6 text-secondary d-flex justify-content-evenly">
                                {{ $player->birthday}}
                                <div class="h6">
                                    {{ $player->salary}}<i class="bi bi-currency-euro"></i>
                                </div>
                                {{ $player->nation}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endauth
@endsection