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
               // handle success
               if(response.status == 200){
                   // console.log(that.records);
                   that.records = response.data
                   // console.log("successfully executed");
               }
               // console.log(response);
           })
           .catch(function (error) {
               // handle error
               console.log(error);
           })

   }
});
