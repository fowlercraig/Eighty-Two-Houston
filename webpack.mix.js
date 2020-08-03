const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');

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

const whitelistPatterns = require('purgecss-with-wordpress').whitelistPatterns;

mix.setPublicPath('./dist')
   .browserSync('madebyhowler.dev.cc');

mix.sass('resources/assets/styles/app.scss', 'styles')
   .sass('resources/assets/styles/editor.scss', 'styles')
   .purgeCss({
     whitelist: require('purgecss-with-wordpress').whitelist,
     whitelistPatterns: [/^(is-|has-|will-|js-|fs-|feather-|word-|aos-|wp-|aspect-|embed-|alm-)/, whitelistPatterns ],
   });

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
  postCss: [
    require('tailwindcss')('./tailwind.config.js'),
  ]
});

mix.sourceMaps(false, 'source-map')
   .version();
