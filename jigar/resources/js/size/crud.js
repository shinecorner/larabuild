import Vue from 'vue'
import axios from 'axios'

var app = new Vue({
        el:"#app",
        data:{
            records: [],
            size: ""
        },
    methods:{
        submitForm(){
            let that = this
                axios.post('api/save-size',{
                       cloth_size: that.size
                }).then(function (response){
                            that.records.push(response.data);
                }).catch(function (error){

                }).then(function (){
                    that.size = "";
                })
        }
    },
        created() {
            let that = this
            axios.get('api/get-sizes').then(function (response){
                    if(response.status == 200){
                        that.records = response.data
                    }

            }).catch(function (error){

            })
        }
})
