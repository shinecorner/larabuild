import Vue from 'vue';

// Vue.component('SchoolDescription', {
//     props: ['item'],
//     template: '<div>We have a school there are some pupils their name are like below {{item.name}}</div>',
// });


// Vue.component('ProductDescription', {
//     props: ['item'],
//     template: `
//         <div>
//         <span v-if="item.type == 'product'">Name of Product:</span>
//         <span v-else>Name of Service:</span>
//         {{ item.name }}
//         <br/>
//         <span v-if="item.type == 'product'">Price of Product: {{ item.price }}</span>
//         <span v-else>Service of fault: {{ item.fault }}</span>
//         <br/><br/>
//         </div>`
// });

// Vue.component('AnnualFunction', {
//     template: '<div>' + new Date().toLocaleString() + '</div>',
// });
//
// Vue.component('ProductDescription', {
//     props: ['item'],
//     template: `<div>
//                 <span v-if="item.type == 'product'">Name of Product:</span>
//                 <span v-else>Name of Model:</span>
//                 {{ item.name }}
//                 <br />
//                 <span v-if="item.type == 'product'">Model of Product: {{ item.model }}</span>
//                 <span v-else>Fault of Phone: {{ item.fault }}</span>
//                 <annual-function></annual-function>
//                 <br /><br />
//             </div>`
// });


// Vue.component('ProductDescription', {
//     props: ['items'],
//     template: `
//         <div>
//         <div v-for="item in items">
//             <span v-if="item.type == 'product'">Name of Product:</span>
//             <span v-else>Name of Model:</span>
//             {{ item.name }}
//         </div>
//         </div>`
// });

new Vue({
    el: "#app",
    data: {
        products: [
            {name: "Motorola", model:"m" ,price: 5600, type: "Goods"},
            {name: "Samsung", model:"A" ,price: 7500, type: "Goods"},
            {name: "Lenovo", model:"K" ,price: 6500, type: "Consumer Goods"},
            {name: "Realm", model:"N" ,price: 5000, type: "Consumer Goods"}
        ],
        services: [
            {name: "repair", fault: "wifi"},
            {name: "replace", fault: "wifi"},
        ]
        // students: [
        //     {name: "sandip", surname: "Bhalodiya", type: "student"},
        //     {name: "Prof. Sherma", degree: "Phd", type: "teacher"},
        //     {name: "Prof. Verma", degree: "Phd", type: "teacher"},
        //     {name: "jigar", surname: "kariya", type: "student"}
        //
        // ],
        // teachers: [
        //     {name: "Prof. Verma", degree: "Phd"},
        //     {name: "Prof. Sherma", degree: "Phd"},
        // ]
    }

});
