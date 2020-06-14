/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from "vue";

//import VueRouter from "vue-router";
//Vue.use(VueRouter);

Vue.component("sidebar", require("./components/Sidebar.vue").default);
Vue.component("login", require("./components/Login.vue").default);
Vue.component("register", require("./components/Register.vue").default);

let app = new Vue({
    el: "#app"

    //router: new VueRouter(routes)
});
