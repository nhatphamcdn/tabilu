const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Config webpack
 |--------------------------------------------------------------------------
 |
 | Something config...
 |
 */

mix.webpackConfig({
   resolve: {
      extensions: ['.js', '.vue'],
      alias: {
         '@': __dirname + '/resources/js/client'
      }
   }
});

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

mix.js('resources/js/systems/app.js', 'public/js/systems')
   .js('resources/js/systems/upload-custom.js', 'public/js/systems')
   .sass('resources/sass/systems/login.scss', 'public/css/systems')
   .sass('resources/sass/systems/app.scss', 'public/css/systems')
   .sass('resources/sass/systems/preloader.scss', 'public/css/systems')
   .copy('node_modules/trumbowyg/dist/ui/icons.svg', 'public/img/icons/trumbowyg');

// mix.browserSync('tabilu.local');

mix.sass('resources/sass/client/app.scss', 'public/css/client');
mix.js('resources/js/client/app.js', 'public/js/client');