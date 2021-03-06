const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
//require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');
require('tailwindcss');
require('autoprefixer');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */


mix.setPublicPath('./dist')
   .browserSync('eightytwohouston.dev.cc');

mix.postCss('resources/assets/styles/app.css', 'dist/styles', [
  require('postcss-import')(),
  require('tailwindcss')('./tailwind.config.js'),
  require('precss')(),
  require('postcss-purgecss-laravel')({
    extend: {
      content: [path.join(__dirname, '/*.php')],
      whitelistPatterns: [/hljs/],
     },
  }),
]);


mix.js('resources/assets/scripts/app.js', 'scripts')
   .js('resources/assets/scripts/customizer.js', 'scripts')
   .blocks('resources/assets/scripts/editor.js', 'scripts')
   .extract();

mix.copyWatched('resources/assets/images/**', 'dist/images')
   .copyWatched('resources/assets/fonts/**', 'dist/fonts');

mix.autoload({
  jquery: ['$', 'window.jQuery'],
});

mix.options({
  processCssUrls: false,
});

mix.sourceMaps(false, 'source-map')
   .version();
