@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')

    <script src="{{mix('js/computed_watcher.js')}}"></script>

@endpush
@section('content')
    <div id="app">
        {{--        <input type="text" v-model="message">--}}
        {{--        @{{reverseMessage}}--}}
        {{--            @{{currentDate()}}--}}

{{--        <input type="text" v-model="firstName">--}}
{{--        <input type="text" v-model="lastName">--}}
{{--        <input type="text" v-model="fullName">--}}
        {{--                @{{fullName}}--}}

                <input type="text" v-model="question"/>
        @{{ answer }}


    </div>
@stop
