<p>
    <a class="btn btn-primary" href="{{route('property.insert')}}"> Add Record </a>
</p>

@extends('layout')

@push('custom-styles')
    <link rel="stylesheet" href="{{asset('vendor/dataTables.bootstrap4.min.css')}}">
@endpush

@push('custom-scripts')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <script src="{{asset('vendor/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#property_list").DataTable({
                "pageLength": 2
            });
        });
    </script>
@endpush

@section('content')
    <table class="table table-striped" id="property_list">
        <thead>
        <tr>
            <th scope="col"> Id</th>
            <th scope="col"> Type</th>
            <th scope="col">Square Feet</th>
            <th scope="col">Slug</th>
            <th scope="col">Direction</th>
            <th scope="col">Discription</th>
            <th scope="col">Is Sold</th>
            <th scope="col">Evidance Date</th>
            <th scope="col">File</th>
            <th scope="col">Update</th>
            <th scope="col">Remove</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{$record->id}}</td>
                <td>{{$record->type}}</td>
                <td>{{$record->sq_feet}}</td>
                <td>{{$record->slug}}</td>
                <td>{{$record->direction}}</td>
                <td>{{$record->discription}}</td>
                <td>{{$record->is_sold}}</td>
                <td>{{$record->evidance_date}}</td>
                <td>
                    @if($record->image)
                        <img src="{{asset($record->image)}}" height="100"/>
                    @endif
                </td>
                <td>
                    <a href="{{route('property.edit',['property' => $record->id])}}" class="btn btn-primary">Edit</a>

                </td>
                <td>
                    <form action="{{ route('property.delete',['property' => $record->id]) }}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete"/>
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

