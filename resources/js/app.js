console.log('Programado por “Controller, Programación y diseño”.Programadores: Escobar German, Kazmer Maximiliano, Salazar Carlos, Soto Daniel.');


require('./bootstrap');

window.Vue = require('vue');

//Alumnos
Vue.component('alumnos-index', require('./components/alumnos/AlumnosIndex.vue'));
Vue.component('alumnos-create', require('./components/alumnos/AlumnosCreate.vue'));
Vue.component('alumnos-edit', require('./components/alumnos/AlumnosEdit.vue'));
//Cursos
Vue.component('cursos-index', require('./components/cursos/CursosIndex.vue'));
Vue.component('cursos-create', require('./components/cursos/CursosCreate.vue'));
Vue.component('cursos-edit', require('./components/cursos/CursosEdit.vue'));
//Materias
Vue.component('materias-index', require('./components/materias/MateriasIndex.vue'));
Vue.component('materias-create', require('./components/materias/MateriasCreate.vue'));
Vue.component('materias-edit', require('./components/materias/MateriasEdit.vue'));
//Docentes
Vue.component('docentes-index', require('./components/docentes/DocentesIndex.vue'));
Vue.component('docentes-create', require('./components/docentes/DocentesCreate.vue'));
Vue.component('docentes-edit', require('./components/docentes/DocentesEdit.vue'));

const app = new Vue({
    el: '#app'
});
