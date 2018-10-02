const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js');
   // .sass('resources/sass/app.scss', 'public/css');
mix.styles(['resources/assets/css/materialize.min.css'], 'public/css/home.css')
	.js(['resources/assets/js/materialize.min.js'], 'public/js/home.js');