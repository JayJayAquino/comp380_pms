require('./bootstrap');

import Vue from 'vue';
import store from './store';
import router from "./router";

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

import App from "./App.vue";
import { mapGetters } from 'vuex';
const app = new Vue({
    el: "#app",
    store,
    router,
    render: h => h(App)
});

export default app;
