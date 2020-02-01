const path = require('path');
const mix = require('laravel-mix');

// Mix only javascript
mix.js('resources/js/client/app.js', 'public/js/client');


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
         '@client': path.resolve(__dirname, './resources/js/client') 
      }
   },
   output: {
     chunkFilename: 'js/client/[chunkhash].js',
     path: mix.config.hmr ? '/' : path.resolve(__dirname, './public')
   }
});