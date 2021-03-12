@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="{{mix('js/template_syntext.js')}}"></script>
@endpush
@section('content')
<div id="app">
{{--    <span v-once>Message: @{{message}}</span>--}}
{{--    <br/>--}}
{{--    <button type="button" @click="changeMsg">Change Message</button>--}}
{{--    <br/>--}}

{{--    <span>@{{message}}</span>--}}
{{--    <span v-html="message"></span>--}}

{{--    <div id="static">My nme is xyz</div>--}}
{{--    <div :id="itemId">My nme is xyz</div>--}}

{{--<span>Total: @{{  price + gst }}</span>--}}
{{--<span>@{{ message.split('').reverse().join('') }}</span>--}}
{{--    <div v-bind:id="'ll-'+itemId">Inner text for div</div>--}}

{{--<p v-if="seen">Now you see me</p>--}}
{{--<button type="button" @click="toggleMessage">Toggle message</button>--}}

{{--    <p v-show="seen">Now you see me</p>--}}
{{--    <button type="button" @click="toggleMessage">Toggle message</button>--}}

{{--    <a v-bind:[attributeName]="url"> Click here </a>--}}


{{--    <form ref="personForm" @submit.prevent="onSubmitForm">--}}
{{--        <input value="111"/>--}}
{{--        <input v-model="phone"/>--}}
{{--        <button @focus="focusOnButton" @mouseover="mouseOverButton"> @{{message}} </button>--}}
{{--    </form>--}}

{{--    <template v-if="seen">--}}
{{--        <h1>Title</h1>--}}
{{--        <p>Paragraph 1</p>--}}
{{--        <p>Paragraph 2</p>--}}
{{--    </template>--}}


{{--    <div v-if="Math.random() > 0.5">--}}
{{--        Now you see me--}}
{{--    </div>--}}
{{--    <div v-else>--}}
{{--        Now you don't--}}
{{--    </div>--}}

{{--    <div v-if="type === 'A'">--}}
{{--        A--}}
{{--    </div>--}}
{{--    <div v-else-if="type === 'B'">--}}
{{--        B--}}
{{--    </div>--}}
{{--    <div v-else-if="type === 'C'">--}}
{{--        C--}}
{{--    </div>--}}
{{--    <div v-else>--}}
{{--        Not A/B/C--}}
{{--    </div>--}}


    <template v-if="loginType === 'username'">
        <label>Username</label>
        <input placeholder="Enter your username" key="login-by-username">
    </template>
    <template v-else>
        <label>Email</label>
        <input placeholder="Enter your email address" key="login-by-email">
    </template>
    <button type="button" @click="toggleLoginType">Toggle Login Type</button>
</div>

@stop
