const mix = require('laravel-mix');

// Mix only javascript systems
mix.js('resources/js/systems/app.js', 'public/js/systems')
   .js('resources/js/systems/upload-custom.js', 'public/js/systems');
