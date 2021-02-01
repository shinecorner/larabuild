@extends('layout')
@section('content')
<form method="post" action="{{url('customer/store')}}">
    @csrf
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
    </div>

    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop