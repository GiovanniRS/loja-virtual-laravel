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

mix.sass('resources/views/admin/scss/style.scss', 'public/assets/admin/css/bootstrap.css')
.styles('resources/views/admin/css/style.css', 'public/assets/admin/css/style.css')
.scripts('node_modules/jquery/dist/jquery.js', 'public/assets/admin/js/jquery.js')
.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/assets/admin/js/bootstrap.js')
.scripts('resources/views/admin/js/script.js', 'public/assets/admin/js/script.js')
.version();