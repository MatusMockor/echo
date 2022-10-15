@extends('admin.master')

@section('title', 'All Game results')

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="list-group">
                    @foreach($games as $game)
                        <a href="{{route('gameResult.edit', ['gameResult' => $game->id])}}"
                           class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-1">{{$game->our_name}} Vs {{$game->enemy_name}}</h4>
                                <p>{{$game->our_score}} : {{$game->enemy_score}}</p>
                                <time datetime="{{$game->created_at->toW3cString()}}">
                                    {{ $game->created_at->diffForHumans() }}
                                </time>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection