@extends('layout')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->firstname}}</td>
            <td>{{$record->lastname}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop