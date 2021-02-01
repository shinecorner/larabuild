@extends('layout')
@section('content')
<form method="post" action="{{route('customer.update',['id' => $record->id])}}">
<input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" value="{{$record->firstname}}" name="firstname" placeholder="Enter First Name">
    </div>

    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" value="{{$record->lastname}}" name="lastname" placeholder="Enter Last Name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop