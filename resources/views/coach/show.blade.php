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
            @lang('app.coaches'):
        </div>

        <div>
            <div class="container-xl">
                <div class="row">
                    @foreach($coaches as $coach)
                        <div class="text-center text-success col-6 py-2">
                            <div class="h1 d-flex">
                                {{ $coach->name}}
                                {{ $coach->surname}} ∙
                                <div class="h1">
                                    ∙ @lang('app.nations'):
                                </div>
                            </div>
                            <div class="h5 text-center text-secondary d-flex justify-content-evenly">
                                {{ $coach->birthday}}
                                <div class="h5">
                                    ∙ {{ $coach->salary}}<i class="bi bi-currency-euro"></i>
                                </div>
                                {{ $coach->nation}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endauth
@endsection