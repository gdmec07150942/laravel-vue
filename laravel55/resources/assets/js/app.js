import ElementUI from 'element-ui';
import 'element-ui/lib/theme-default/index.css';
import Vue from 'vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);
import VueRouter from 'vue-router';

Vue.use(VueRouter);
Vue.use(ElementUI);  //把引入的ElementUI装入我们的Vue
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('articles', require('./components/Articles.vue'));
Vue.component('login', require('./components/Login.vue'));
const app = new Vue({
    el: '#app'
});

const articles = new Vue({
    el: '#articles'
});
const login = new Vue({
    el: '#login'
});



