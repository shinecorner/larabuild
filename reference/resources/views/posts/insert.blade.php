@extends('layout')
@push('custom-scripts')
    <script>
        // $(function(){
        //     $('#submit_form').click(function (){
        //         var datastring = $("#post_form").serialize();
        //         console.log(datastring);
        //         $.ajax({
        //             type: "POST",
        //             url: "post/store",
        //             data: datastring,
        //             dataType: "json",
        //             success: function(data) {
        //                 //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
        //                 // do what ever you want with the server response
        //             },
        //             error: function() {
        //                 alert('error handling here');
        //             }
        //         });
        //
        //     });
        // })
    </script>
@endpush
@section('content')
    <div class="container">
        @if ($errors->any('post'))
{{--            {{dd($errors)}}--}}
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{url('post/store')}}" id="post_form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{old('title')}}" class="form-control" id="title" name="title" maxlength="30"
                               placeholder="Enter title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--                            <div class="alert alert-danger">{{ $errors->post->first('title') }}</div>--}}
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="{{old('password')}}" class="form-control" id="password" name="password"
                               placeholder="Enter password">
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" value="{{old('password_confirmation')}}" class="form-control" id="password_confirmation" name="password_confirmation"
                               placeholder="Confirm password">
                    </div>
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" value="{{old('slug')}}" class="form-control" id="slug" name="slug"
                               placeholder="Enter slug">
                    </div>
                    <div class="form-group">
                        <label for="slug">Image</label>
                        <input type="file" class="form-control" id="image" name="image"/>
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="description">
            {{old('description')}}
        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="author_name">Author Name</label>
                        <input type="text" class="form-control" id="author_name" name="author[name]" maxlength="30"
                               placeholder="Enter Author Name">
                    </div>
                    <div class="form-group">
                        <label for="author_surname">Author Surname</label>
                        <input type="text" class="form-control" id="author_surname" name="author[surname]" maxlength="30"
                               placeholder="Enter Author Surname">
                    </div>
                    <div class="form-group">
                        <label for="version">Version</label>
                        <input type="text" class="form-control" id="version" name="v1.0" maxlength="30"
                               placeholder="Enter Version">
                    </div>
                    <div class="form-group">
                        <label for="publish_at">Publish at</label>
                        <input type="text" class="form-control" id="publish_at" name="publish_at">
                    </div>
                    <div class="form-group">
                        <label for="active"></label>
                        <input type="checkbox" value="1" class="form-check-input" id="active" name="active">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
{{--                    <button type="button" id="submit_form" class="btn btn-primary">Submit</button>--}}
                </form>
            </div>
        </div>
    </div>
@stop
