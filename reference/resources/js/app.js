require('./bootstrap');
import Vue from 'vue';
window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    data: {
        message: "Hi how are you"
    }
});
