const mix = require('laravel-mix');

mix.js('resources/js/admin.js','public/js')
    .js('resources/js/front.js','public/js')
    .sass('resources/sass/admin/style.scss', 'public/css/admin')
    .sass('resources/sass/front/style.scss', 'public/css/front')
    .options({
        processCssUrls: false
    });
