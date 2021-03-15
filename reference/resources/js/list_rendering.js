import Vue from 'vue'

Vue.component('TodoItem', {
    template: '\
    <li>\
      {{ title }}\
      <button v-on:click="$emit(\'remove\')">Remove</button>\
      <button v-on:click="sayHello">Say Hello</button>\
    </li>\
  ',
    props: ['title'],
    methods: {
        sayHello(){
            console.log(this.title)
        }
    }
})
new Vue({
    el: '#app',
    data: {
        newTodoText: '',
        todos: [
            {
                id: 1,
                title: 'Do the dishes',
            },
            {
                id: 2,
                title: 'Take out the trash',
            },
            {
                id: 3,
                title: 'Mow the lawn'
            }
        ],
        nextTodoId: 4
    },
    methods: {
        addNewTodo: function () {
            this.todos.push({
                id: this.nextTodoId++,
                title: this.newTodoText
            })
            this.newTodoText = ''
        },
        removeTodo: function (index){
            console.log(index)
            this.todos.splice(index, 1)
        }
    }
})



/*
Vue.component('TodoDetail',
    {
   props: ["task"],
   template: `<div>
    <span>{{task.taskName}}</span>: <span>{{task.isComplete}}</span>
 </div>`
});

new Vue({
    el: "#app",
    data: {
        parentMessage: 'Parent',
        // items: [
        //     { id: 1, message: 'Foo' },
        //     { id: 2, message: 'Bar' }
        // ],
        // object: {
        //     title: 'How to do lists in Vue',
        //     author: 'Jane Doe',
        //     publishedAt: '2016-04-10'
        // }

        // personNames: ['kamal', 'nayan', 'ashish', 'jigar'],

        // numbers: [ 1, 2, 3, 4, 5 ],

        // sets: [[ 1, 2, 3, 4, 5 ], [6, 7, 8, 9, 10]],

        // items: [
        //     { id: 1, msg: 'Foo' },
        //     { id: 2, msg: 'Bar' }
        // ],

        // todos: [
        //     {taskName: "Pay electricity bill", isComplete: 0},
        //     {taskName: "Go to bank", isComplete: 1},
        //     {taskName: "Ojas form fillup", isComplete: 0},
        // ]

        todos: [
            {taskName: "Pay electricity bill", isComplete: 0},
            {taskName: "Go to bank", isComplete: 1},
            {taskName: "Ojas form fillup", isComplete: 0},
        ]
    },
    methods: {
        pushArray(){
            this.items.push({id: 3, message: "Good morning"})
        },
        popArray(){
            this.items.pop()
        },
        sortArray(){
            this.personNames.sort()
        },
        spliceArray(){
            this.personNames.splice(1,1,'prakash');
        },
        replaceArray(){
            this.personNames = this.personNames.filter(function (item) {
                // return item.message.match(/Foo/)
                return item.length <= 5;
            })
        },
        even: function (numbers) {
            return numbers.filter(function (number) {
                return number % 2 === 0
            })
        }
    },
    computed: {
        evenNumbers: function () {
            return this.numbers.filter(function (number) {
                return number % 2 === 0
                // return number < 4
            })
        }
    }
})*/

