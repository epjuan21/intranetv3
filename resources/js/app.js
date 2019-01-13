require('./bootstrap');

window.Vue = require('vue');

Vue.component('BarnizFluor', require('./src/graphics/Horal/BarnizFluor.vue'));
Vue.component('Sellantes', require('./src/graphics/Horal/Sellantes.vue'));
Vue.component('ControlPlaca', require('./src/graphics/Horal/ControlPlaca.vue'));
Vue.component('FluorTopico', require('./src/graphics/Horal/FluorTopico.vue'));

Vue.component('Vacunacion', require('./src/graphics/Vacunacion/Vacunacion.vue'));
Vue.component('PostParto', require('./src/graphics/PostParto/PostParto.vue'));
Vue.component('RecienNacido', require('./src/graphics/RecienNacido/RecienNacido.vue'));
Vue.component('PlanificacionPrimeraVez', require('./src/graphics/Planificacion/PlanificacionPrimeraVez.vue'));
Vue.component('PlanificacionFamiliarControl', require('./src/graphics/Planificacion/PlanificacionFamiliarControl.vue'));
Vue.component('Diu', require('./src/graphics/Diu/Diu.vue'));
Vue.component('IngresosCyd', require('./src/graphics/CyD/IngresosCyD.vue'));
Vue.component('ControlesCyd', require('./src/graphics/CyD/ControlesCyD.vue'));
Vue.component('Joven', require('./src/graphics/Joven/Joven.vue'));
Vue.component('ControlPrenatalIngreso', require('./src/graphics/ControlPrenatal/ControlPrenatalIngreso.vue'));
Vue.component('ControlPrenatalConsulta', require('./src/graphics/ControlPrenatal/ControlPrenatalConsulta.vue'));
Vue.component('ConsultaAdulto', require('./src/graphics/Adulto/Adulto.vue'));
Vue.component('Citologia', require('./src/graphics/Citologia/Citologia.vue'));
Vue.component('AgudezaVisual', require('./src/graphics/AgudezaVisual/AgudezaVisual.vue'));

import store from './store'

const app = new Vue({
    store,
    el: '#app'
});

var Highcharts = require('highcharts');