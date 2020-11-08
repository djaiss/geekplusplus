const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('mix-tailwindcss');
require('laravel-mix-purgecss');

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

let purgeCssOptions = {
    enabled: true,
    // List of regex of CSS class to not remove
    whitelistPatterns: [/^ball-pulse/, /^vs__/, /dot-/],
    // List of regex of CSS class name whose child path CSS class will not be removed
    //  ex: to exclude "jane" in "mary jane": add "mary")
    whitelistPatternsChildren: [/^vs-/],
};

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .purgeCss(purgeCssOptions)
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });
