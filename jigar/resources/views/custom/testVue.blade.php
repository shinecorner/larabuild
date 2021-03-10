@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
{{--    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>--}}
<script src="{{mix('js/test_vue/first.js')}}"></script>
    <script>
        /*
            1st
         */
        // Vue.component('SchoolDescription', {
        //     props: ['item'],
        //     template: '<div>We have a school there are some pupils their name are like below @{{item.name}}</div>',
        // });



        /*
                    2nd
                 */
        // Vue.component('ProductDescription', {
        //     props: ['item'],
        //     template: '<div>Product Name Like Below @{{item.name}}</div>',
        // });

        // var app = new Vue({
        //     el: "#app",
        //     data: {
        //         products: [
        //             {name: "Motorola", price: 5600, type: "Goods"},
        //             {name: "Samsung", price: 7500, type: "Goods"},
        //             {name: "Lenovo", price: 6500, type: "Consumer Goods"},
        //             {name: "Realm", price: 5000, type: "Consumer Goods"}
        //         ],
        //     }
        //
        // });

    </script>










    {{--    <script>--}}
    {{--        var app = new Vue({--}}
    {{--            el: '#app',--}}
    {{--            data: {--}}
    {{--                name: "jigar",--}}
    {{--                message: 'Hello Good Afternoon!',--}}
    {{--                hovermessage: 'You loaded  this page on ' + new Date().toLocaleString(),--}}
    {{--                url: "http://google.com",--}}
    {{--                products: [--}}
    {{--                    {name: "Motorola", price: 5600},--}}
    {{--                    {name: "Samsing", price: 7500},--}}
    {{--                    {name: "Lenovo", price: 6500},--}}
    {{--                ]--}}
    {{--            },--}}
    {{--            methods: {--}}
    {{--                submitForm() {--}}
    {{--                    // console.log("Button is clicked");--}}
    {{--                    //     console.log(this.message);--}}
    {{--                    // this.message = this.message.split('').reverse().join('');--}}
    {{--                    this.message = this.message.split('').reverse().join('');--}}
    {{--                }--}}
    {{--            }--}}
    {{--        })--}}
    {{--    </script>--}}

@endpush

@section('content')

    <div id="app">

{{--        @{{ message }}--}}
{{--            1st--}}
{{--            <div v-for="product in products">--}}
{{--                <school-description :item="product" ></school-description>--}}
{{--            </div>--}}


{{--        <product-description v-for="product in products" :key="product.name" :item="product"></product-description>--}}



{{--        <product-description v-for="product in products" :key="product.name" :item="product"></product-description>--}}





{{--        <product-description v-for="product in products" :key="product.name" :item="product"></product-description>--}}


{{--        <school-description :persons="students"></school-description>--}}

{{--        <product-description :items="products"></product-description>--}}

    </div>




















    {{--    <duv id="app">--}}
    {{--        @{{ message }}--}}
    {{--        <br><br>--}}
    {{--        <span :title="hovermessage">--}}
    {{-- Hover your mouse over me for a few seconds--}}
    {{--    to see my dynamically bound title!--}}
    {{--        </span>--}}

    {{--        <br><br>--}}
    {{--        <span v-if="name == 'jigar'"> Hi Jigar Nice to meet you</span>--}}
    {{--        <span v-else> Not Well jigar </span>--}}

    {{--        <br><br>--}}
    {{--        <a :href="url">Click here</a>--}}
    {{--        <br><br>--}}
    {{--        <ol>--}}
    {{--            <li v-for="product in products" style="background-color: cadetblue">--}}
    {{--                @{{ product.name }}--}}
    {{--            </li>--}}
    {{--        </ol>--}}

    {{--        <br><br>--}}
    {{--        <button v-on:click="submitForm">Click me</button>--}}

    {{--        <br><br>--}}
    {{--        @{{name}}--}}
    {{--        <input v-model="name" />--}}

    {{--    </div>--}}


@stop
