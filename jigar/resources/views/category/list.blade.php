@extends('layout')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop