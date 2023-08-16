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
            @lang('app.posts'):
        </div>
        <div class="container-lg">
            @foreach($posts as $post)
                <div class="row align-items-start g-3">
                    <div class="col-4">
                        <img src="{{ asset('img/post.jpg') }}" alt="" class="img-fluid mb-3" style="height:18rem";>
                    </div>
                    <div class="col-8">
                        <div class="h3 mb-3 text-success">
                            {{ $post->title}}
                        </div>
                        <div class="text-secondary h5 mb-3">
                            {{ $post->body}}
                        </div>
                        <div class="text-success py-5">
                            Fabrizio Romano
                            <div class="text-secondary">
                                {{ $post->created_at }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endauth
@endsection