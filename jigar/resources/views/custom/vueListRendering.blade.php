@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="{{mix('js/list_rendering.js')}}"></script>
@endpush
@section('content')
    <div id="app">
        {{--                        <li v-for="item in items" :key="item.id">--}}
        {{--                                @{{item.message}}--}}
        {{--                        </li>--}}

        {{--        <li v-for="(item, index) in items" :key="item.id">--}}
        {{--            @{{ parentMessage }} - @{{ index }} - @{{ item.message }}--}}
        {{--        </li>--}}

        {{--        <ul id="v-for-object" class="demo">--}}
        {{--            <li v-for="(value, keyName, index) in object" :key="index">--}}
        {{--               @{{ index }} - @{{ keyName }} : @{{ value }}--}}
        {{--            </li>--}}
        {{--        </ul>--}}

        {{--        <li v-for="item in items">--}}
        {{--                @{{ item.message }}--}}
        {{--        </li>--}}

        {{--        <button type="button" @click="pushArray">Push</button>--}}
        {{--        <button type="button" @click="PophArray">Pop</button>--}}

        {{--            <li v-for="(pname, index) in personNames" :key="index">--}}
        {{--                @{{ pname }}--}}
        {{--            </li>--}}
        {{--        <button type="button" @click="sortArray"> sort </button>--}}
        {{--        <button type="button" @click="spliceArray"> splice </button>--}}
        {{--        <button type="button" @click="replaceArray"> replace </button>--}}


        {{--        <li v-for="n in evenNumbers">@{{ n }}</li>--}}

        {{--        <ul v-for="set in sets">--}}
        {{--            <li v-for="n in even(set)"> @{{ n }}</li>--}}
        {{--        </ul>--}}

        {{--        <span v-for="n in 10">@{{ n }} </span>--}}


        {{--        <ul>--}}
        {{--            <template v-for="item in items">--}}
        {{--                <li>@{{ item.msg }}</li>--}}
        {{--                <li>--}}

        {{--                </li>--}}
        {{--            </template>--}}
        {{--        </ul>--}}


        {{--        <ul>--}}
        {{--            <li v-for="todo in todos" v-if="!todo.isComplete">--}}
        {{--                        @{{ todo }}--}}
        {{--            </li>--}}
        {{--        </ul>--}}


        {{--        <ul v-if="todos.length">--}}
        {{--            <li v-for="todo in todos">--}}
        {{--                    @{{ todo }}--}}
        {{--            </li>--}}
        {{--        </ul>--}}
        {{--        <p v-else>No todos left!</p>--}}


        {{--        <todo-detail v-for="(todo,index) in todos" :task="todo" :key="index"></todo-detail>--}}


        <form v-on:submit.prevent="addNewTodo">
            <label for="new-todo">Add a todo</label>
            <input
                v-model="newTodoText"
                id="new-todo"
                placeholder="Enter Todo"
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
