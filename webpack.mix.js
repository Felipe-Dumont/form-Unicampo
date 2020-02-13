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

mix
    .sass(
        "resources/views/scss/bootstrap.scss",
        "public/site/css/bootstrap.css"
    )

    .scripts(
        "node_modules/jquery/dist/jquery.js",
        "public/site/js/jquery.js"
    )

    .scripts(
        "node_modules/bootstrap/dist/js/bootstrap.bundle.js",
        "public/site/js/bootstrap.js"
    )

    .scripts(
        "resources/js/script.js",
        "public/site/js/script.js"
    )

    .styles(
        "resources/css/style.css",
        "public/site/css/style.css"
    )

    .version();
