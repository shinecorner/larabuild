@extends('layout')
@section('content')
<form method="post" action="{{url('property/store')}}">
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="type">Type :</label>
            <select class="form-control" name="type" id="type">
                <option value="flat">Flat</option>
                <option value="shop">Shop</option>
                <option value="office">Office</option>

            </select>
{{--            {{Form::select('type', ['flat' => 'Flat', 'shop' => 'Shop', 'office' => 'Office' , 'class' => 'form-control','id' => 'type'])}}--}}
        </div>

        <div class="form-group">
            <label for="sq_feet">Square Feet:</label>
            <input type="text" name="sq_feet" id="sq_feet" class="form-control" placeholder="Enter Square Feet">

        </div>

        <div class="form-group">
            <label for="direction">Type :</label>
            <select class="form-control" name="direction" id="direction">
                <option value="north">North</option>
                <option value="south">South</option>
                <option value="east">East</option>
                <option value="west">West</option>
            </select>
        </div>

        <div class="form-group">
            <label for="discription">Discription:</label>
            <textarea class="form-control" rows="5" id="discription" name="discription" placeholder="Enter Discription"></textarea>
        </div>

        <div class="form-group">
            <label for="is_sold">Is Sold:</label>
            <input type="checkbox" checked class="form-control" value="1" name="is_sold" id="is_sold">
        </div>

        <div class="form-group">
            <label for="evidance_date"> Evidance Date:</label>
            <input type="date" name="evidance_date" class="form-control" id="evidance_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop
