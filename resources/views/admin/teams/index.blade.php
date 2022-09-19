@extends('admin.master')

@section('title', 'All Teams')

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="list-group">
                    @foreach($teams as $team)
                        <a href="{{route('teams.edit', ['team' => $team->slug])}}"
                           class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-1">{{$team->name}}</h4>
                                <time datetime="{{$team->created_at->toW3cString()}}">
                                    {{ $team->created_at->diffForHumans() }}
                                </time>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection