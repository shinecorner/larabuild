@extends('layout')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Snehal</th>
            <th>Last Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td> {{ $record->id }} </td>
                <td> {{ $record->fname }} </td>
                <td> {{ $record->lname }} </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
