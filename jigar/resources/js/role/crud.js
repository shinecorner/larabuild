import Vue from 'vue'
import axios from 'axios'

Vue.component('RoleDetail',{
            props: ['item'],
            template:`
                <ul>
                <li>{{item.role_name}}</li>
                </ul>
            `
})
var app = new Vue({
    el: "#app",
    data: {
        message: "hello",
        records: [],
        role: ""
    },
    methods: {
        submitForm() {
            let that = this
            axios.post('api/save-role', {
                role_name: that.role
            }).then(function (response) {
                that.records.push(response.data);
            }).catch(function (error) {

            }).then(function () {
                that.role = "";
            })

        }
    },
    created() {
        let that = this
        axios.get('api/get-roles').then(function (response){
                  that.records = response.data
        }).catch(function (error){

        })
    }


})
