let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/admin.scss', 'public/css/admin')
    .sass('resources/assets/sass/font-awesome/font-awesome.scss', 'public/css/');


mix.scripts([
    'resources/assets/js/vendors/jquery-migrate-3.0.0.min.js',
    'resources/assets/js/vendors/jquery-ui.js',
    'resources/assets/js/vendors/viedolightbox/video.js',
    'resources/assets/js/vendors/jquery.waypoints.min.js',
    //Customized
    'resources/assets/js/vendors/function-admin.js',
    'resources/assets/js/vendors/function.js',
], 'public/js/admin/plugins.js');


if (mix.config.inProduction) {
    mix.version();
}