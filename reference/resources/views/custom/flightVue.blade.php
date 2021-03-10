@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
<script src="/js/flight/list.js"></script>
@endpush
@section('content')
<div id="app">
    @{{message}}
</div>

@stop
