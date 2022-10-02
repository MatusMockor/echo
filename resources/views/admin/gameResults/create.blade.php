@extends('admin.master')

@section('title', 'Add game result')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Please add some game result</h4>
                <game-result-form
                        routeBack="{{route('gameResult.index')}}"
                        routeSendForm="{{route('gameResult.store')}}"
                        :teams="{{json_encode($teams)}}"
                />
            </div>
        </div>
    </div>
@endsection