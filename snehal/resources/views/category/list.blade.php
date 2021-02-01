@extends('layout')
@push('custom-styles')
    <link rel="stylesheet" href="{{asset('vendor/dataTables.bootstrap4.min.css')}}">
@endpush
@push('custom-scripts')
    <script src="{{asset('vendor/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#category_list').DataTable({
                "pageLength": 5,
            });
        });
    </script>
@endpush
@section('content')
    <table id="category_list" class="table table-striped" style="width:170%">

        <thead>
        <tr>
            <th>
                <a href="{{route('category.insert')}}" class="btn btn-primary">Insert</a>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th data-orderable="false"> </th>
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
                    <form action="{{ route('category.delete',['id' => $record->id]) }}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
