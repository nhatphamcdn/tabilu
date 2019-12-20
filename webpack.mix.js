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
   .js('resources/js/upload-custom.js', 'public/js')
   .sass('resources/sass/login.scss', 'public/css')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/preloader.scss', 'public/css')
   .copy('node_modules/trumbowyg/dist/ui/icons.svg', 'public/img/icons/trumbowyg');
