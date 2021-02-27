@extends('layout')
@push('custom-styles')
    <link rel="stylesheet" href="{{asset('vendor/dataTables.bootstrap4.min.css')}}">
@endpush
@push('custom-scripts')
    <script src="{{asset('vendor/dataTables.bootstrap4.min.js')}}"></script>
@endpush
@section('content')
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>File</th>
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
                    @if($record->image)
                        <img src="{{ $record->image }}" height="100" />
                    @endif
                </td>
                <td>
                    <a href="{{route('post.edit',['post' => $record->id])}}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('post.delete',['id' => $record->id]) }}" method="post">
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
