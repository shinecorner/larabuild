@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="{{mix('js/template_syntext.js')}}"></script>
@endpush

@section('content')

    <div id="app">

        {{--        <span v-once>Message : @{{ message }}</span>--}}
        {{--        <br><br>--}}
        {{--        <button type="button" @click="changeMsg">Change Message</button>--}}
        {{--        @{{ message }}--}}
        {{--        <span v-html="message"></span>--}}


        {{--        <div id="static">My name is jigar</div>--}}
        {{--        <div :id="itemId">My Name is Jigar</div>--}}

        {{--        <span> Total:@{{ price + gst }}</span>--}}

        {{--        <span>@{{ message.split('').reverse().join(',') }}</span>--}}


        {{--        <div v-bind:id="'ll'+itemId">--}}
        {{--                Inner Text For Div--}}
        {{--        </div>--}}


        {{--        <p v-if="seen">Now You See Me</p>--}}
        {{--        <button type="button" @click="toggleMessage">Toggle Message</button>--}}

        {{--        <p v-show="seen">Now You See Me</p>--}}
        {{--        <button type="button" @click="toggleMessage">Toggle Message</button>--}}

        {{--        <a v-bind:[attributeName]="url"> Click here </a>--}}


        {{--        <form ref="personForm" @submit.prevent="onSubmitForm">--}}
        {{--            <input value="111"/>--}}
        {{--            <input v-model="phone"/>--}}
        {{--            <button @focus="focusOnButton"  @mouseover="mouseOverButton"> @{{ message }} </button>--}}
        {{--        </form>--}}

        {{--        <template v-if="seen">--}}
        {{--            <h1>Title</h1>--}}
        {{--            <p>Paragraph 1</p>--}}
        {{--            <p>Paragraph 2</p>--}}
        {{--        </template>--}}

{{--        <div v-if="Math.random() > 0.5">--}}
{{--                Now You see me--}}
{{--        </div>--}}
{{--        <div v-else>--}}
{{--                Now You Don't--}}
{{--        </div>--}}

{{--        <div v-if="type === 'A'">A</div>--}}
{{--        <div v-else-if="type === 'B'">B</div>--}}
{{--        <div v-else-if="type == 'C'">C</div>--}}
{{--        <div v-else>Not ABC</div>--}}

        <template v-if="loginType === 'username'">
                <label>Username</label>
            <input placeholder="Enter your username" key="login-by-username">
        </template>
        <template v-else>
            <label>E-mail</label>
            <input placeholder="Enter your email address" key="login-by-email">
        </template>
        <button type="button" @click="toggleLoginType">Toggle Login Type</button>
    </div>



@stop
