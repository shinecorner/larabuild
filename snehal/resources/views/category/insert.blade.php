@extends('layout')
@section('content')
    <form method="post" action="{{url('category/store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
