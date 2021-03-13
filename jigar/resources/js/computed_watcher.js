import Vue from 'vue'

/*
var app = new Vue({
    el: "#app",
    data: {
        message: "hello",
        firstName: '',
        lastName: '',
        // fullName: 'Rohit Sharma'
    },
    computed: {
        // on full name

        reverseMessage: function () {
            return this.message.split('').reverse().join('')
        },
        // fullName: function (){
        //     return this.firstName + ' ' + this.lastName
        // }


        //  input full name on and check
        fullName: {
            // getter
            get: function (){
              return this.firstName + ' ' + this.lastName
            },
            // setter
            set: function (newValue) {
                var names = newValue.split(' ')
                this.firstName = names[0]+'abcd'
                this.lastName = names[names.length - 1]
            }
        }

    },
    // watch: {
    //     // off full name
    //
    //     firstName: function (val){
    //         this.fullName = val + ' ' + this.lastName
    //     },
    //     lastName: function (val){
    //         this.fullName = this.firstName + ' ' + val
    //     }
    // },
    methods:{
        // makeReverse:function (){
        //     return this.message.split('').reverse().join('')
        // }
        currentDate: function (){
            return Date.now()
        }
    }



})


*/


// console.log(app.reverseMessage)



new Vue({
    el: '#app',
    data: {
        question: '',
        answer: 'I cannot give you an answer until you ask a question!'
    },
    watch: {
        // whenever question changes, this function will run
        question: function (newQuestion, oldQuestion) {
            // console.log(oldQuestion)
            // console.log(newQuestion)
            this.answer = 'Waiting for you to stop typing...'
            this.debouncedGetAnswer()
        }
    },
    created: function () {
        // _.debounce is a function provided by lodash to limit how
        // often a particularly expensive operation can be run.
        // In this case, we want to limit how often we access
        // yesno.wtf/api, waiting until the user has completely
        // finished typing before making the ajax request. To learn
        // more about the _.debounce function (and its cousin
        // _.throttle), visit: https://lodash.com/docs#debounce
        this.debouncedGetAnswer = _.debounce(this.getAnswer, 1500)
    },
    methods: {
        getAnswer: function () {
            console.log("here")
            if (this.question.indexOf('?') === -1) {
                this.answer = 'Questions usually contain a question mark. ;-)'
                return
            }
            this.answer = 'Thinking...'
            var vm = this
            axios.get('api/get-colors')
                .then(function (response) {
                    vm.answer = response.data
                })
                .catch(function (error) {
                    vm.answer = 'Error! Could not reach the API. ' + error
                })
        }
    }
})



/*

new Vue({
    el: "#app",
    data: {
        question: '',
    },
    computed: {
        answer: function () {
            console.log("here")
            if (this.question.indexOf('?') === -1) {
                return 'Questions usually contain a question mark. ;-)'
            }
            axios.get('api/get-colors').then(function (response) {
                console.log(response.data)
            }).catch(function (error) {
                return 'Error! Could not reach the API. ' + error
            })

        }
    }
})

*/

