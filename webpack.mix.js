const mix = require('laravel-mix');

mix.scripts([
		'resources/js/vue.js',
		'resources/js/axios.js',
		'resources/js/materialize.js',
	], 'public/js/home.js')
   .styles([
  	'resources/css/materialize.css',
  	'resources/css/style.css',
  	'resources/css/fontawesome.css',
  ], 'public/css/home.css');

mix.js('resources/js/app.js', 'public/js/app.js');
