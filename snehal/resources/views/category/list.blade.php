@extends('layout')
@push('custom-styles')
    <link rel="stylesheet" href="{{asset('vendor/dataTables.bootstrap4.min.css')}}">
@endpush
@push('custom-scripts')
    <script src="{{asset('vendor/dataTables.bootstrap4.min.js')}}"></script>
@endpush
@section('content')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#category_list').DataTable({
                "pageLength": 5,
            });
        });
    </script>
    <table id="category_list" class="table table-striped">
        <a href="{{route('category.insert')}}" class="btn btn-primary">Insert</a>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td> {{ $record->id }} </td>
                <td> {{ $record->name }} </td>
                <td>
                    {{--                    <a href="{{}}" class="btn btn-primary">Delete</a>--}}
                    <a href="{{route('category.edit',['id' => $record->id])}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
