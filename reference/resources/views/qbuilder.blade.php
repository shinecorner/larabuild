@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')

@endpush
@section('content')
    <h1>List</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Contact</th>
            <th>Order</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $key=>$record)
            <tr>
                <td> {{ $key }} </td>
                <td> {{ $record['name'] }} </td>
                <td>
                    @foreach($record['phone'] as $phone)
                        {{ $phone }}
                        <br />
                    @endforeach
                </td>
                <td>
                    @foreach($record['orders'] as $key=>$order)
                        {{ $key }} - {{ $order['department'] }} - {{ $order['price'] }}
                        <br />
                    @endforeach
                </td>
{{--                <td> {!!  implode('<br>',$record['price']) !!} </td>--}}
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
