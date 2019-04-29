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

mix.js('resources/js/main.js', 'public/js')
  .sass('resources/sass/main.scss', 'public/css')
  .disableNotifications();

mix.options({
  processCssUrls: false,
});

mix.copyDirectory('resources/fonts', 'public/fonts')
  .copy('resources/images/icons/favicon.ico', 'public/images/icons/favicon.ico')
  .copy('resources/images/logo/logo.png', 'public/images/logo/logo.png')
  .copy('resources/images/fon/mobile-index-fon.jpg', 'public/images/fon/mobile-index-fon.jpg')
  .copy('resources/images/fon/mobile-common-fon.jpg', 'public/images/fon/mobile-common-fon.jpg')
  .copy('resources/images/fon/index-fon.jpg', 'public/images/fon/index-fon.jpg')
  .copy('resources/images/fon/common-fon.jpg', 'public/images/fon/common-fon.jpg');

mix.sass('resources/sass/admin/admin.scss', 'public/css');

if (mix.inProduction()) {
  mix.version();
}
