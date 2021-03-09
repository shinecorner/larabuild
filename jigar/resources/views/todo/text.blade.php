@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

@endpush


<script>

    Vue.component('todo-item', {
        props: ['todo'],
        template: '<li>{{ todo.text }}</li>'
    })


    var app7 = new Vue({
        el: '#app-7',
        data: {
            groceryList: [
                { id: 0, text: 'Vegetables' },
                { id: 1, text: 'Cheese' },
                { id: 2, text: 'Whatever else humans are supposed to eat' }
            ]
        }
    })
</script>
