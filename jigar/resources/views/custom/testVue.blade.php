@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                name: "jigar",
                message: 'Hello Good Afternoon!',
                hovermessage: 'You loaded  this page on ' + new Date().toLocaleString(),
                products: [
                    {name: "Motorola", price: 5600},
                    {name: "Samsing", price: 7500},
                    {name: "Lenovo", price: 6500},
                ]
            },
            methods: {
                submitForm() {
                    // console.log("Button is clicked");
                    //     console.log(this.message);
                    // this.message = this.message.split('').reverse().join('');
                    this.message = this.message.split('').reverse().join('');
                }
            }
        })
    </script>

@endpush

@section('content')

    <duv id="app">
        @{{ message }}
        <br><br>
        <span :title="hovermessage">
 Hover your mouse over me for a few seconds
    to see my dynamically bound title!
        </span>

        <br><br>
        <span v-if="name == 'jigar'"> Hi Jigar Nice to meet you</span>
        <span v-else> Not Well jigar </span>

        <br><br>

        <ol>
            <li v-for="product in products" style="background-color: cadetblue">
                @{{ product.name }}
            </li>
        </ol>

        <br><br>
        <button v-on:click="submitForm">Click me</button>

        <br><br>
        @{{name}}
        <input v-model="name" />

    </duv>


@stop
