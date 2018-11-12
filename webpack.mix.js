const mix = require('laravel-mix');

mix.scripts([
		'resources/js/vue.js',
		'resources/js/axios.js',
		'resources/js/app.js',
		'resources/js/materialize.js',
	], 'public/js/app.js')
   .styles([
  	'resources/css/materialize.css',
  	'resources/css/style.css',
  	'resources/css/fontawesome.css',
  ], 'public/css/app.css');
