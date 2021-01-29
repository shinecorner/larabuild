@extends('layout')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td> {{ $record->id }} </td>
                <td> {{ $record->title }} </td>
                <td> {{ $record->description }} </td>
                <td>
{{--                    <a href="{{}}" class="btn btn-primary">Delete</a>--}}
                    <a href="{{route('post.edit',['id' => $record->id])}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
