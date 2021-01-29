@extends('layout')
@section('content')
<form method="post" action="{{route('post.update',['id' => $record->id])}}">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$record->title}}">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea class="form-control" id="description" name="description" placeholder="description">{{$record->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
