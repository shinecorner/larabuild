import Vue from 'vue'

var app = new Vue({
    el: '#app',
    data: {
        message: "hello",
        // items: [
        //     {name: 'jigar',surname: "kariya", isActive: 0},
        //     {name: 'bhuva',surname: "sagar",  isActive: 1},
        //     {name: 'bhagyesh',surname: "parmar",  isActive: 0},
        // ]
        // isActive: true,
        // hasError: false
        // classObject: {
        //     active: true,
        //     'text-danger': false
        // }

        isActive: true,
        error: null
    },
    computed: {
        classObject: function () {
            return {
                active: this.isActive && !this.error,
                'text-danger': this.error && this.error.type === 'fatal'
            }
        }
    },
    methods: {
        divClicked: function () {
            console.log("Div is Clicked");
        },
        btnPress: function () {
            console.log("button is clicked");
        },
        kepPressed: function (event) {
            console.log("Key is pressed: " + event.keyCode)
        },
        mouseClick: function (event) {
            console.log("Mouse  is pressed" + event.button)
        }
    }
})

//
// var example2 = new Vue({
//     el: "#example-2",
//     data: {
//         name: "Vue js"
//     },
//     methods: {
//         greet: function (event) {
//             // `this` inside methods points to the Vue instance
//
//             alert('Hello ' + this.name + '?')
//             // `event` is the native DOM event
//             if (event) {
//                 alert(event.target.tagName)
//             }
//         }
//     }
//
// })


// var example3 = new Vue({
//     el: "#example-3",
//     methods: {
//         say: function (message){
//             alert(message)
//         }
//     }
// })


// var example4 = new Vue({
//     el:"#example-4",
//     methods: {
//         warn: function (message, event) {
//             // now we have access to the native event
//             if (event) {
//                 event.stopPropagation()
//             }
//             alert(message)
//         }
//     }
//
// })



