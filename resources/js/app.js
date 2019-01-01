require('./bootstrap');

window.Vue = require('vue');

Vue.component('sellantes', require('./components/charts/sellantes.vue'));
Vue.component('graphOne', require('./src/graphics/GraphOne.vue'));
Vue.component('graphTwo', require('./src/graphics/GraphTwo.vue'));
Vue.component('ControlPlaca', require('./src/graphics/Horal/ControlPlaca.vue'));

import store from './store'

const app = new Vue({
    store,
    el: '#app'
});

var Highcharts = require('highcharts');
