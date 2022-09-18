@extends('admin.master')

@section('title', 'Add post')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Now you can create something amazing</h4>
                <form class="forms-sample" method="post" action="{{route('posts.store')}}">
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
                        <x-trix-field id="body" name="body"/>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection