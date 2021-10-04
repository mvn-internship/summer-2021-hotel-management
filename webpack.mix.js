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
    .js('resources/js/jquery-slimscroll.js', 'public/js')
    .js('resources/js/jquery-ui.js', 'public/js')
    .js('resources/js/jquery.scrollbar.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/fontawesome.scss', 'public/css')
    .sass('resources/sass/scrollbar.scss', 'public/css')
    .sourceMaps();
