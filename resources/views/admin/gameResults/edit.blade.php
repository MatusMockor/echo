@extends('admin.master')

@section('title', 'Edit game result')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">You want edit ? ok lets do it</h4>
                <form class="forms-sample" method="post"
                      action="{{route('gameResult.update', ['gameResult' => $gameResult->id])}}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="ourName">Our Name</label>
                                <input type="text" class="form-control" id="ourName" name="our_name"
                                       value="{{$gameResult->our_name}}">
                            </div>
                            <div class="col-md-6">
                                <label for="ourScore">Our Score</label>
                                <input type="number" class="form-control" id="ourScore" name="our_score"
                                       value="{{$gameResult->our_score}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="enemyName">Enemy Name</label>
                                <input type="text" class="form-control" id="enemyName" name="enemy_name"
                                       value="{{$gameResult->enemy_name}}">
                            </div>
                            <div class="col-md-6">
                                <label for="enemyScore">Enemy Score</label>
                                <input type="number" class="form-control" id="enemyScore" name="enemy_score"
                                       value="{{$gameResult->enemy_score}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="mvp_player">MVP Player</label>
                                <input type="text" class="form-control" id="mvp_player" name="mvp_player"
                                       value="{{$gameResult->mvp_player}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="teams">Our team section</label>
                        <select class="form-control" id="teams" name="team_id">
                            <option value="{{$gameResult->team->id}}">{{$gameResult->team->name}}</option>
                            @foreach($teams as $team)
                                @if($team->id === $gameResult->team->id)
                                    @continue
                                @endif
                                <option value="{{$team->id}}" name="team_ids"
                                >{{ $team->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary mr-2">
                        Update
                    </button>
                    <a href="{{ route('gameResult.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection