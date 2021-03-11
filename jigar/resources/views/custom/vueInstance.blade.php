@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="{{mix('js/flights/lifecycle.js')}}"></script>
@endpush
@section('content')
    <div id="app">
        <table>
            <tr v-for="record in records">
                <td>@{{record.name}}</td>
                <td>@{{record.number}}</td>
                <td>@{{record.departure}}</td>
                <td>@{{record.destination}}</td>
            </tr>
        </table>
    </div>

@stop
