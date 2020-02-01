const mix = require('laravel-mix');

// Mix only style
mix.sass('resources/sass/systems/login.scss', 'public/css/systems')
   .sass('resources/sass/systems/app.scss', 'public/css/systems')
   .sass('resources/sass/systems/preloader.scss', 'public/css/systems')
   .copy('node_modules/trumbowyg/dist/ui/icons.svg', 'public/img/icons/trumbowyg')
   .sass('resources/sass/client/app.scss', 'public/css/client');
