/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

global.$ = global.jQuery = require('jquery');

require('./bootstrap');

require('datatables.net-bs4');



window.$ = window.jQuery = require('jquery');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('creator-info', require('./components/creator-info.vue').default);
Vue.component('related-blog-item', require('./components/related-blog-item.vue').default);
Vue.component('related-blogs', require('./components/related-blogs.vue').default);
Vue.component('blog', require('./components/blog.vue').default);
Vue.component('blog-page', require('./components/blog-page.vue').default);
Vue.component('blog-details', require('./components/blog-details.vue').default);
Vue.component('edit-form', require('./components/edit-form.vue').default);
Vue.component('add-form', require('./components/add-form.vue').default);
Vue.component('my-blogs', require('./components/my-blogs.vue').default);
Vue.component('my-blog-item', require('./components/my-blog-item.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

import $ from "jquery";

$(document).ready(function () {
    $('#blog_table').DataTable();
});
