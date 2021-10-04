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
<<<<<<< HEAD
    .js('resources/js/jquery-slimscroll.js', 'public/js')
    .js('resources/js/jquery-ui.js', 'public/js')
    .js('resources/js/jquery.scrollbar.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/fontawesome.scss', 'public/css')
    .sass('resources/sass/scrollbar.scss', 'public/css')
=======
    .js('resources/js/owl_carousel.js', 'public/js')
    .js('resources/js/jquery_ui.js', 'public/js')
    .js('resources/js/waypoints.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/owl_carousel.scss', 'public/css')
    .sass('resources/sass/bootstrap_datepicker.scss', 'public/css')
    .sass('resources/sass/font_awesome.scss', 'public/css')
>>>>>>> f78b2c68f8f2475c733a02e4e07396cbc0218618
    .sourceMaps();
