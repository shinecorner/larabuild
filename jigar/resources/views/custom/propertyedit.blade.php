@extends('layout')
@section('content')
    <h1>{{"Its Different"}}</h1>
    <form method="post" action="{{route('property.update',['property' => $record->id])}}">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="type">Type :</label>

                {{Form::select('type', ['flat' => 'Flat', 'shop' => 'Shop', 'office' => 'Office'], $record->type,['class' => 'form-control','id' => 'type'])}}
            </div>

            <div class="form-group">
                <label for="sq_feet">Square Feet:</label>

                {{Form::text('sq_feet', $record->sq_feet,['class' => 'form-control', 'placeholder' => 'Enter Square Feet','id' => 'sq_feet'])}}
            </div>

            <div class="form-group">
                <label for="direction">Direction :</label>

                {{Form::select('direction', ['north' => 'North', 'south' => 'South', 'east' => 'East', 'west' => 'West'], $record->direction,['class' => 'form-control','id' => 'direction'])}}
            </div>

            <div class="form-group">
                <label for="discription">Discription:</label>
                {{ Form::textarea('discription', $record->discription ,['class'=>'form-control', 'placeholder' => 'Enter Discription' ,'rows' => 5,'id' => 'discription']) }}
            </div>

            <div class="form-group">
                <label for="is_sold">Is Sold:</label>

                {{Form::checkbox('is_sold','1',$record->is_sold,['class' => 'form-control','id' => 'is_sold'])}}
            </div>

            <div class="form-group">
                <label for="evidance_date"> Evidance Date:</label>

                {{Form::date('evidance_date', $record->evidance_date,['class' => 'form-control','id' => 'evidance_date'])}}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@stop
