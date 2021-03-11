import Vue from 'vue'
import axios from 'axios'
var app = new Vue({
    el: "#app",
    data: {
        records: []
    },
    created() {
        let that = this
        axios.get('api/get-flights')
            .then(function (response) {

                if(response.status == 200){

                    that.records = response.data

                }

            })
            .catch(function (error) {

                console.log(error);
            })

    }
});
