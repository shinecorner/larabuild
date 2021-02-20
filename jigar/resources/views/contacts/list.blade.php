<p>
    <a class="btn btn-primary" href="{{route('contacts.insert')}}"> Add Record </a>
</p>

@extends('layout')

@push('custom-styles')
<link rel="stylesheet" href="{{asset('vendor/dataTables.bootstrap4.min.css')}}">
@endpush

@push('custom-scripts')
<script src="{{asset('vendor/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#customer_contact_list").DataTable({
            "pageLength": 2
        });
    });
</script>
@endpush

@section('content')
<table class="table table-striped" id="customer_contact_list">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer Id</th>
            <th>contact</th>
            <th>Actions</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->firstname }}</td>
            <td>
            @foreach($record->contacts as $con)
            {{$con->contact}}
            @endforeach
                
            </td>
            <td>
                <a href="{{route('contacts.edit',['id' => $record->id])}}" class="btn btn-primary">Edit</a>

            </td>
            <td>
                <form action="{{ route('contacts.delete',['id' => $record->id]) }}" method="post">
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