@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="{{mix('js/events.js')}}"></script>
@endpush
@section('content')
<div id="app">
{{--    <div @click="divClicked" style="width: 200px; height: 200px; background-color: #9fcdff">--}}
{{--        <button type="button" @click.stop="btnPress">Send</button>--}}
{{--        <button type="button" @click.self="btnPress">Send</button>--}}
{{--    </div>--}}

{{--    <button type="button" @click.once="btnPress">Send</button>--}}

{{--    <input v-on:keyup.enter="kepPressed">--}}

{{--    <input v-on:keyup.page-down="kepPressed">--}}

{{--    <input v-on:keyup.ctrl.67="kepPressed">--}}

{{--    <input v-on:click.ctrl="kepPressed" />--}}

    <span @click.right.prevent="mouseClick">This is mouse click testing</span>
</div>

@stop
