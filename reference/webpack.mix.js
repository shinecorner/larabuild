const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').vue()
    .js('resources/js/flight/list.js', 'public/js/flight')
    .js('resources/js/flight/lifecycle.js', 'public/js/flight')
    .js('resources/js/color/crud.js', 'public/js/color')
    .js('resources/js/template_syntext.js', 'public/js')
    .js('resources/js/computed_watcher.js', 'public/js')
    .js('resources/js/list_rendering.js', 'public/js')
    .js('resources/js/events.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
