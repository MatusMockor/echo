@extends('admin.master')

@section('content')
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Basic info</p>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th class="pl-0  pb-2 border-bottom">Type</th>
                            <th class="border-bottom pb-2">Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="pl-0">Posts</td>
                            <td class="text-muted">{{$postsCount}}</td>
                        </tr>
                        <tr>
                            <td class="pl-0">Teams</td>
                            <td class="text-muted">{{$teamsCount}}</td>
                        </tr>
                        <tr>
                            <td class="pl-0">Games</td>
                            <td class="text-muted">{{$gamesCount}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop