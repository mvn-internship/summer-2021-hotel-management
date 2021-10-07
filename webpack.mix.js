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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/owl-carousel.js', 'public/js')
    .js('resources/js/jquery-ui.js', 'public/js')
    .js('resources/js/waypoints.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/app-admin.js', 'public/js')
    .sass('resources/sass/owl-carousel.scss', 'public/css')
    .sass('resources/sass/fontawesome.scss', 'public/css')
    .sass('resources/sass/bootstrap-datepicker.scss', 'public/css')
    .sass('resources/sass/jquery.scrollbar.scss', 'public/css')
    .sass('resources/sass/font-awesome.scss', 'public/css')
    .sourceMaps();
