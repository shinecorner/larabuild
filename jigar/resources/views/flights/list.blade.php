@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')

@endpush
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Departure</th>
            <th>Destination</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td> {{ $record->id }} </td>
                <td> {{ $record->name }} </td>
                <td> {{ $record->departure }} </td>
                <td> {{ $record->destination }} </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
