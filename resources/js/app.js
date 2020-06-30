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

// Vanilla JS

/// DATE PICKER
if (document.querySelector("#date-in")) {
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#date-in").value = today;
}

//FILE INPUT
if (document.getElementById("photo")) {
    const fileInput = document.getElementById("photo");
    const infoArea = document.querySelector(".files");

    fileInput.addEventListener("change", showFileName);

    function showFileName(event) {
        const input = event.srcElement;
        if (input) {
            const fileName = input.files[0].name;
            const p = document.createElement("p");
            p.innerText = "Filename: " + fileName;
            infoArea.appendChild(p);
        }
    }
}
