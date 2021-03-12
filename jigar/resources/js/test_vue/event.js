import Vue from 'vue';

// var app = new Vue({
//     el: '#example-1',
//     data: {
//         counter: 0
//     }
// })

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



var example4 = new Vue({
    el:"#example-4",
    methods: {
        warn: function (message, event) {
            // now we have access to the native event
            if (event) {
                event.stopPropagation()
            }
            alert(message)
        }
    }

})
