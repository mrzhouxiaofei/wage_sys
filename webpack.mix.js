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

mix.js('resources/assets/js/admin/admin.js', 'public/js')
   .js('resources/assets/js/wechat/wechat.js', 'public/js/wechat.js')
   // .sass('resources/assets/sass/app.css', 'public/css')
   .extract(['vue', 'vue-router', 'element-ui']);
