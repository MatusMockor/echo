@extends('admin.master')

@section('title', 'All Posts')

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="list-group">
                    @foreach($posts as $post)
                        <a href="{{route('posts.edit', ['post' => $post->slug])}}"
                           class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-1">{{$post->title}}</h4>
                                <time datetime="{{$post->created_at->toW3cString()}}">
                                    {{ $post->created_at->diffForHumans() }}
                                </time>
                            </div>
                            <p class="mb-1">{!! $post->excerpt !!}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection