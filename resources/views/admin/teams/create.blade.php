@extends('admin.master')

@section('title', 'Create team')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Now you can create amazing Team section</h4>
                <team-form
                        route-send-form="{{route('teams.store')}}"
                        route-back="{{ route('teams.index')  }}"
                />
            </div>
        </div>
    </div>
@endsection