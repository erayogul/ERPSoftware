/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');
import Vuetify from 'vuetify'
Vue.use(Vuetify)
import moment from 'moment';
import { Form, HasError, AlertError } from 'vform';

import Gate from "./Gate";
Vue.prototype.$gate = new Gate(window.user);

import swal from 'sweetalert2'
window.swal = swal;

const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
 /* didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }*/
})

window.toast = toast;

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
 
Vue.use(VueAxios, axios)

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '3px'
})

const routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/profile:id' ,name: 'profile',  component: require('./components/Profile.vue').default },
    { path: '/editProfile:id' ,name: 'editProfile',  component: require('./components/ProfileEdit.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/roles', component: require('./components/Roles.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/notfound', component: require('./components/NotFound.vue').default },
    { path: '/notready', component: require('./components/NotReady.vue').default }
  ]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })
  
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.filter('upText', function(text){
  //return text.charAt(0).toUpperCase() + text.slice(1);
});

Vue.filter('myDate', function(created){
  return moment(created).format('MMMM Do YYYY, h:mm:ss a');
});

Vue.filter('gender', function(genderNum){
  return (genderNum == '0') ? 'Male' : 'Female';
});

Vue.filter('maritalStatus', function(maritalStatus){
  return (maritalStatus == '0') ? 'Single' : 'Married';
});


window.Fire = new Vue();


Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue').default
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue').default
);

Vue.component(
  'not-found',
  require('./components/NotFound.vue').default
);

Vue.component(
  'not-ready',
  require('./components/NotReady.vue').default
);


const vuetifyOptions={};
const app = new Vue({
    vuetify: new Vuetify(vuetifyOptions),
    el: '#app',
    router
});
