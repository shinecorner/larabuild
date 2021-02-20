@extends('layout')
@section('content')
<form method="post" action="{{url('contacts/update')}}">
    @csrf
    <div class="form-group">
        <label for="customer_id">Customer Id</label>
        <select class="custom-select" name="customer_id" id="customer_id">
            <?php foreach ($records as $customer) : ?>
                <option value="<?php echo $customer['id'] ?>">
                    <?php echo $customer['firstname'] . " " . $customer['lastname']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="lastname">Contact </label>
        <input type="contact" class="form-control" id="contact" name="contact" placeholder="Enter Contact">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop