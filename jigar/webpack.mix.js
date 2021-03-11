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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .js('resources/js/test_vue/first.js', 'public/js/test_vue')
    .js('resources/js/flights/list.js', 'public/js/flights')
    .js('resources/js/flights/lifecycle.js', 'public/js/flights')
    .js('resources/js/color/crud.js', 'public/js/color')
    .js('resources/js/size/crud.js', 'public/js/size')
    .js('resources/js/test_vue/event.js', 'public/js/test_vue')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}
