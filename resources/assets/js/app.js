
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

Vue.component('dashboard-header', require('./components/DashboardHeader.vue'));
Vue.component('departments', require('./components/Departments.vue'));
Vue.component('service-dashboard-search', require('./components/ServiceDashboardsSearch.vue'));
Vue.component('department-overview', require('./components/DepartmentOverview.vue'));
Vue.component('service-overview', require('./components/ServiceOverview.vue'));
Vue.component('program-overview', require('./components/ProgramOverview.vue'));

const app = new Vue({
    el: '#app'
});
