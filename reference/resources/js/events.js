import Vue from 'vue'
new Vue({
    el: "#app",
    data: {

    },
    methods: {
        btnPress: function (){
            console.log("button is clicked");
        },
        divClicked: function (){
            console.log("Div clicked")
        },
        kepPressed: function (event){
            console.log("Key is pressed: " + event.keyCode)
        },
        mouseClick: function (event){
            console.log("Mouse clicked" + event.button)
        }
    }
})
