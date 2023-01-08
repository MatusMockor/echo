@extends('admin.master')

@section('title', 'Create team')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <h4 class="card-title">Now you can edit stuff</h4>
                    <form method="post" action="{{route('teams.destroy', ['team' => $team->slug])}}">
                        <button type="submit" class="btn btn-danger mr-2">Delete team</button>
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                <team-form
                        route-send-form="{{route('teams.update', ['team' => $team->slug])}}"
                        route-back="{{route('teams.index')}}"
                        :team="{{json_encode($team)}}"
                />
            </div>
        </div>
    </div>
@endsection