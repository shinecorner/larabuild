@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')

    <script src="{{mix('js/test_vue/event.js')}}"></script>

@endpush
@section('content')


{{--            <div id="example-1">--}}
{{--                <button v-on:click="counter += 1">Add 1</button>--}}
{{--                <p>The button above has been clicked @{{ counter }} times.</p>--}}
{{--            </div>--}}


{{--    <div id="example-2">--}}
{{--        <button v-on:click="greet">Greet</button>--}}
{{--    </div>--}}


{{--    <div id="example-3">--}}
{{--        <button v-on:click="say('hi')">Say Hi</button>--}}
{{--        <button v-on:click="say('what')">Say What</button>--}}
{{--    </div>--}}

    <div id="example-4">
        <button v-on:click="warn('Form cannot be submitted yet.', $event)">
            Submit
        </button>
    </div>
@stop
