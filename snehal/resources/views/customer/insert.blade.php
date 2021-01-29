@extends('layout')
@section('content')
    <form method="post" action="{{url('customer/store')}}">
        @csrf
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Your First Name">
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Your Last Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
