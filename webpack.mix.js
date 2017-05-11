const { mix } = require('laravel-mix');

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
mix.sass('resources/assets/sass/xetaravel.scss', 'public/css/xetaravel.min.css')
    .sass('resources/assets/sass/admin/xetaravel.admin.scss', 'public/css/xetaravel.admin.min.css')
    .sass('resources/assets/sass/bootstrap/bootstrap.scss', 'public/css/bootstrap.min.css')
    .sass('resources/assets/sass/jasny-bootstrap/jasny-bootstrap.scss', 'public/css/bootstrap.plugins.min.css')
    .sass('resources/assets/sass/font-awesome/font-awesome.scss', 'public/css/font-awesome.min.css')
    .scripts([
        'resources/assets/js/libs/jquery.min.js',
        'resources/assets/js/libs/jquery.easing.min.js',
        'resources/assets/js/libs/tether.min.js',
        'resources/assets/js/libs/bootstrap.min.js',
        'resources/assets/js/libs/jasny-bootstrap.min.js',
        'resources/assets/js/libs/particles.min.js',
        'resources/assets/js/libs/prism.min.js',
        'resources/assets/js/libs/scrollup.min.js',
        'resources/assets/js/libs/sidebar.min.js',
        'resources/assets/js/libs/raphael.min.js',
        'resources/assets/js/libs/morris.min.js',
        'resources/assets/js/libs/jquery-jvectormap.min.js',
        'resources/assets/js/libs/jquery-jvectormap-world-merc-en.min.js',
    ], 'public/js/lib.min.js')
    .scripts([
        'resources/assets/js/highlight.js',
    ], 'public/js/highlight.min.js')
    .scripts([
        'resources/assets/js/xetaravel.admin.js'
    ], 'public/js/xetaravel.admin.min.js')
    .js([
        'resources/assets/js/xetaravel.js'
    ], 'public/js/xetaravel.min.js')
    .copyDirectory('resources/assets/music', 'public/music')
    .copyDirectory('resources/assets/images', 'public/images')
    .copyDirectory('resources/assets/fonts', 'public/fonts')
    .version();
