@extends('layout')
@section('content')
<form method="post" action="{{route('category.update',['id' => $record->id])}}">
<input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$record->name}}" placeholder="Enter Name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop