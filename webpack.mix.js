const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/admin.js', 'public/js')
	.sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/frontend/butterfly/js/app.js', 'public/frontend/butterfly/js')
	.js('resources/assets/frontend/butterfly/js/style.js', 'public/frontend/butterfly/js')
	.sass('resources/assets/frontend/butterfly/sass/app.scss', 'public/frontend/butterfly/css');

mix.copy('node_modules/chart.js/Chart.js', 'public/js')
	.copy('resources/assets/js/vendor', 'public/js/vendor')
	.copy('resources/assets/frontend/butterfly/css', 'public/frontend/butterfly/css')
	.copy('resources/assets/frontend/butterfly/img', 'public/frontend/butterfly/img')
	.copy('resources/assets/frontend/butterfly/fonts', 'public/frontend/butterfly/fonts')
	.copy('resources/assets/images', 'public/images');

