@extends('admin.master')

@section('title', 'Edit post')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Please please edit something 😭</h4>
                    <form method="post" action="{{route('posts.destroy', ['post' => $post->slug])}}">
                        <button type="submit" class="btn btn-danger mr-2">Delete post</button>
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                <form class="forms-sample" method="post" action="{{route('posts.update', ['post' => $post->slug])}}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text"
                               class="form-control"
                               id="Title"
                               placeholder="Title"
                               name="title"
                               value="{{$post->title}}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="Excerpt">Excerpt</label>
                        <x-trix-field id="excerpt" value="{!! $post->excerpt !!}" name="excerpt"/>
                    </div>
                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="exampleSelectGender">Gender</label>--}}
                    {{--                        <select class="form-control" id="exampleSelectGender">--}}
                    {{--                            <option>Male</option>--}}
                    {{--                            <option>Female</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}
                    <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01"
                                       name="image"
                                >
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <x-trix-field id="body" name="body" value="{!! $post->body !!}"/>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('posts.index')  }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <img class="card-img" src="{{asset('storage/' . $post->image?->imagePath)}}" alt="{{$post->image?->imageName}}">
    </div>
@endsection