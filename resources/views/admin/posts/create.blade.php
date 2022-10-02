@extends('admin.master')

@section('title', 'Add post')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Now you can create something amazing</h4>
                <form class="forms-sample" method="post" action="{{route('posts.store')}}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" id="Title" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="Excerpt">Excerpt</label>
                        <x-trix-field id="excerpt" name="excerpt"/>
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
                        <input type="file" name="image" class="file-upload-default">
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
                        <x-trix-field id="body" name="body"/>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('posts.index')  }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection