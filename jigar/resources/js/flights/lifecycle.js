import Vue from 'vue'
import axios from 'axios'
Vue.component('FlightDescription', {
    props: ['item'],
    template: `
        <ul>
      <li>{{item.name}}</li>
      <li>{{item.number}}</li>
      <li>{{item.departure}}</li>
      <li>{{item.destination}}</li>
        </ul>`
});

var app = new Vue({
    el: "#app",
    data: {
        flights: []
    },
    created() {
        let that = this
        axios.get('api/get-flights').then(function (response) {
            if(response.status == 200){
                that.flights = response.data
            }

            })
            .catch(function (error) {
                console.log(error);
            })

    }
});
