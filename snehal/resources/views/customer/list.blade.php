@extends('layout')
@push('custom-styles')
    <link rel="stylesheet" href="{{asset('vendor/dataTables.bootstrap4.min.css')}}">
@endpush
@push('custom-scripts')
    <script src="{{asset('vendor/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#customer_list').DataTable({
                "pageLength": 5,
            });
        });
    </script>
@endpush
@section('content')

    <a href="{{route('customer.insert')}}" class="btn btn-primary">Insert</a><br><br>
    <table id="customer_list" class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td> {{ $record->id }} </td>
                <td> {{ $record->fname }} </td>
                <td> {{ $record->lname }} </td>
                <td>
                    {{--                    <a href="{{}}" class="btn btn-primary">Delete</a>--}}
                    <a href="{{route('customer.edit',['id' => $record->id])}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
