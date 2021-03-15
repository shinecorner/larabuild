@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="{{mix('js/list_rendering.js')}}"></script>
@endpush
@section('content')
<div id="app">
{{--    <li v-for="item in items" :key="item.id">--}}
{{--        @{{ item.message }}--}}
{{--    </li>--}}

{{--    <li v-for="(item, index) in items">--}}
{{--        @{{ parentMessage }} - @{{ index }} - @{{ item.message }}--}}
{{--    </li>--}}

{{--    <ul id="v-for-object" class="demo">--}}
{{--        <li v-for="(value, keyName, index) in object" :key="index">--}}
{{--            @{{ value }}--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--        <li v-for="item in items" :key="item.id">--}}
{{--            @{{ item.message }}--}}
{{--        </li>--}}

{{--        <button type="button" @click="pushArray">Push</button>--}}
{{--    <button type="button" @click="popArray">Pop</button>--}}

{{--    <li v-for="(pname, index) in personNames" :key="index">--}}
{{--        @{{ pname }}--}}
{{--    </li>--}}
{{--    <button type="button" @click="sortArray">Sort</button>--}}
{{--    <button type="button" @click="spliceArray">Splice</button>--}}
{{--    <button type="button" @click="replaceArray">Replace</button>--}}

{{--    <li v-for="n in evenNumbers">@{{ n }}</li>--}}

{{--    <ul v-for="set in sets">--}}
{{--        @{{ set }}--}}
{{--        <li v-for="n in even(set)">@{{ n }}</li>--}}
{{--    </ul>--}}

{{--    <ul>--}}
{{--        <li v-for="item in 10">@{{ item }}</li>--}}
{{--    </ul>--}}

{{--    <ul>--}}
{{--        <template v-for="item in items">--}}
{{--            <li>@{{ item.msg }}</li>--}}
{{--        </template>--}}
{{--    </ul>--}}

{{--    <ul>--}}
{{--        <template v-for="item in items">--}}
{{--            <li>@{{ item.msg }}</li>--}}
{{--        </template>--}}
{{--    </ul>--}}

{{--    <ul>--}}
{{--        <li v-for="todo in todos" v-if="!todo.isComplete">--}}
{{--            @{{ todo }}--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--    <ul v-if="todos.length">--}}
{{--        <li v-for="todo in todos">--}}
{{--            @{{ todo }}--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--    <p v-else>No todos left!</p>--}}

{{--    <todo-detail v-for="(todo,index) in todos" :task="todo" :key="index"></todo-detail>--}}

{{--    <todo-detail v-for="(todo,index) in todos" :task="todo" :key="index"></todo-detail>--}}

    <form v-on:submit.prevent="addNewTodo">
        <label for="new-todo">Add a todo</label>
        <input
            v-model="newTodoText"
            id="new-todo"
            placeholder="E.g. Feed the cat"
        >
        <button>Add</button>
    </form>
    <ul>
        <li
            is="todo-item"
            v-for="(todo, index) in todos"
            v-bind:key="todo.id"
            v-bind:title="todo.title"
            v-on:remove="removeTodo(index)"
        ></li>
    </ul>
</div>

@stop
