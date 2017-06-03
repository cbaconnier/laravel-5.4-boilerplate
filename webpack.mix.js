const {mix} = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const Dotenv = require('dotenv-webpack');

module.exports = {
    plugins: [
        new Dotenv({
            path: './.env', // Path to .env file (this is the default)
            safe: false // load .env.example (defaults to "false" which does not use dotenv-safe)
        }),
    ]
};


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


if (process.env.npm_lifecycle_event != 'watch') {
    mix
        .js(['resources/assets/js/vendor/bootstrap.js',
            //'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/api.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/colorize.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/form.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/state.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/visibility.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/visit.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/site.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/accordion.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/checkbox.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/dimmer.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/dropdown.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/embed.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/modal.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/nag.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/popup.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/progress.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/rating.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/search.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/shape.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/sidebar.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/sticky.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/tab.js',
            'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui/transition.js',
        ], 'public/js/vendor.js')
        .sass('resources/assets/sass/vendor/vendor.scss', 'public/css')
    ;
} else {
    // to add the files into manifest.json
    mix
        .combine('public/js/vendor.js', 'public/js/vendor.js')
        .combine('public/css/vendor.css', 'public/css/vendor.css')
}

mix
    .js('resources/assets/js/main.js', 'public/js/main.js')
    .sass('resources/assets/sass/main.scss', 'public/css')
    .webpackConfig({
        plugins: [
            new BrowserSyncPlugin({
                open: process.env.WEBPACK_PROXY,
                proxy: process.env.WEBPACK_PROXY,
                files: ['resources/views/**/*.php', 'app/**/*.php', 'routes/**/*.php']
            })
        ]
    })
;

