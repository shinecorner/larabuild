import Vue from 'vue'
import axios from 'axios'

Vue.component('ColorDetail',{
    props: ["item"],
    template: `
        <ul>
          <li>{{item.cloth_color}}</li>
        </ul>
    `
});
var app = new Vue({
   el: "#app",
   data: {
       records: [],
       color: ""
   },
    methods: {
        submitForm(){
            let that = this
            // console.log(this.color);
            axios.post('api/save-color', {
                cloth_color: that.color
            }).then(function (response){
                // console.log(response);
                that.records.push(response.data);
            }).catch(function (error){

            }).then(function (){
                that.color = "";
            })

        }
    },
   mounted() {
       let that = this
       axios.get('api/get-colors').then(function (resp){
           // console.log(resp);
           if(resp.status == 200){
               that.records = resp.data
           }
       }).catch(function (e){

       })

   }
});
