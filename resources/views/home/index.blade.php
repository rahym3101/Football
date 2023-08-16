@extends('layouts.app')
@section('title')
    FOOTBALL
@endsection
@section('content')
    <div class="container-xl">
        <div class=" text-center py-5">
            <div class="mb-4 text-success h1 fw-bold">
                @lang('app.which club do you support?')
            </div>
            <div class="g-4">
                <div class="align-items-center m-4">
                    @foreach($teams as $team)
                        <div class="mb-0 h4">
                            {!! str('<i class="bi-star-fill text-warning"></i> ')->repeat(round($team->rating, 0)) !!}
                            {!! str('<i class="bi-star text-warning"></i> ')->repeat(round(5 - $team->rating, 0)) !!}
                        </div>
                        <a href="{{ route('home', $team->id) }}" class="text-decoration-none">
                            <img src="{{ asset('img/teams/' . $team->id . '.png') }}" alt="{{ $team->name }}" class="img-fluid" style="height:12rem";>
                            <div class="text-center h5 text-dark">
                                <a href="{{ route('clubs.show', $team->id) }}"
                                   class="text-success text-decoration-none mb-4 fw-bold">
                                    {{ $team->name }}
                                </a>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection