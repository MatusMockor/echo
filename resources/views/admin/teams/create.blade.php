@extends('admin.master')

@section('title', 'Create team')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Now you can create amazing Team section</h4>
                <create-player-form
                        route-send-form="{{route('players.store')}}"
                        route-back="{{ route('players.index')  }}"
                        teams="{{json_encode($teams)}}"
                />
            </div>
        </div>
    </div>
@endsection