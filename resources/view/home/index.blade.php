@extends('layouts.app')
@section('title')
    FOOTBALL
@endsection
@section('content')
    <div class="container-xl">
        <div class="h1">
            Siz haysy toparyn fanady?
        </div>
        <a href="{{ route('home',$team->id) }}" class="text-decoration-none">
            <div class="col-4">
                <div>
                    <img src="{{ asset('img/teams/Barcelona.png') }}" alt="FC Barcelona" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/PSG.png') }}" alt="PSG" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/inter miami.png') }}" alt="Inter Miami" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/liverpool.png') }}" alt="Liverpool" class="img-fluid">
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="{{ asset('img/teams/real.png') }}" alt="Real madrid" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/city.png') }}" alt="Manchester City" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/man unt.png') }}" alt="Manchester United" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/chelsea.png') }}" alt="Chelsea" class="img-fluid">
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="{{ asset('img/teams/bayern.png') }}" alt="Bayern Munich" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/dortmund.png') }}" alt="Dortmund" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/arsenal.png') }}" alt="Arsenal" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/teams/juventus.png') }}" alt="Juventus" class="img-fluid">
                </div>
            </div>
        </a>
    </div>
@endsection
