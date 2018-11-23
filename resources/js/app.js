console.log('Programado por “Controller, Programación y diseño”.Programadores: Escobar German, Kazmer Maximiliano, Salazar Carlos, Soto Daniel.');


require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('alumnos-index', require('./components/alumnos/AlumnosIndex.vue'));
Vue.component('alumnos-create', require('./components/alumnos/AlumnosCreate.vue'));
Vue.component('alumnos-edit', require('./components/alumnos/AlumnosEdit.vue'));

const app = new Vue({
    el: '#app'
});
