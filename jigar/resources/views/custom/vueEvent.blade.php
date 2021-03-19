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

    {{--    <div id="example-4">--}}
    {{--        <button v-on:click="warn('Form cannot be submitted yet.', $event)">--}}
    {{--            Submit--}}
    {{--        </button>--}}

    {{--    </div>--}}

    <div id="app">
        {{--        <div @click="divClicked" style="width: 200px; height: 200px; background-color: #9fcdff">--}}
        {{--            <button type="button" @click.stop="btnPress">Send</button>--}}
        {{--            <button type="button" @click="btnPress">Send</button>--}}
        {{--            <button type="button" @click.self="btnPress">Send</button>
        --}}
        {{--        </div>--}}

        {{--        <button type="button" @click.once="btnPress">Send</button>--}}

        {{--        <input v-on:keyup.enter="kepPressed">--}}
        {{--        <input v-on:keyup.esc="kepPressed">--}}
        {{--        <input v-on:keyup.space="kepPressed">--}}
        {{--        <input v-on:keyup.up="kepPressed">--}}
        {{--        <input v-on:keyup.down="kepPressed">--}}
        {{--        <input v-on:keyup.left="kepPressed">--}}
        {{--        <input v-on:keyup.right="kepPressed">--}}

        {{--        <input v-on:keyup.page-down="kepPressed">--}}

        {{--                <input v-on:keydown.tab.prevent="kepPressed">--}}

        {{--        <input v-on:keyup.ctrl.67="kepPressed">--}}
        {{--        <input v-on:keyup.ctrl.88="kepPressed">--}}

        {{--        <input v-on:click.ctrl="kepPressed" />--}}

        {{--        <span v-on:click.left="mouseClick">This is Mouse Click testing</span>--}}

        {{--        <span v-on:click.right.prevent="mouseClick">This is Mouse Click testing</span>--}}

        {{--        <span v-on:click.middle="mouseClick">This is Mouse Click testing</span>--}}


        {{--        <template v-for="item in items">--}}
        {{--            <div v-bind:class="{ active: isActive }">--}}
        {{--                @{{ item.isActive }}--}}
        {{--            </div>--}}
        {{--        </template>--}}

        {{--        <div v-bind:class="{ active: isActive }"> thi</div>--}}

        {{--        <div--}}
        {{--            class="static"--}}
        {{--            v-bind:class="{ active: isActive, 'text-danger': hasError }"--}}
        {{--        >hello</div>--}}

        {{--        <div class="static active">this is active class</div>--}}
        {{--        <div v-bind:class="classObject">Hello</div>--}}

        <div v-bind:class="classObject"></div>
    </div>
@stop
