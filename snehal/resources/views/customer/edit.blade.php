@extends('layout')
@section('content')
    <form method="post" action="{{route('customer.update',['id' => $record->id])}}">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Your First Name" value="{{$record->fname}}">
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Your Last Name" value="{{$record->lname}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
