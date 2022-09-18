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
                <form class="forms-sample" method="post" action="{{route('posts.update', ['post' => $post->slug])}}">
                    @csrf
                    @method('PUT')
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
                    {{--                    <div class="form-group">--}}
                    {{--                        <label>File upload</label>--}}
                    {{--                        <input type="file" name="img[]" class="file-upload-default">--}}
                    {{--                        <div class="input-group col-xs-12">--}}
                    {{--                            <input type="text" class="form-control file-upload-info" disabled--}}
                    {{--                                   placeholder="Upload Image">--}}
                    {{--                            <span class="input-group-append">--}}
                    {{--                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>--}}
                    {{--                        </span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
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
@endsection