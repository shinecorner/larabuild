import Vue from 'vue';

Vue.component('FlightDescription', {
    props: ['item'],
    template: `
        <tr>
      <td>{{item.name}}</td>
      <td>{{item.number}}</td>
      <td>{{item.departure}}</td>
      <td>{{item.destination}}</td>
        </tr>`
});

new Vue({
    el: "#app",
    data: {
        flights: records
    }
    // created: function () {
    //     console.log(this.flights[0]);
    // }
})
