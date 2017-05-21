const {mix} = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const Dotenv = require('dotenv-webpack');
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

module.exports = {
    plugins: [
        new Dotenv({
            path: './.env', // Path to .env file (this is the default)
            safe: false // load .env.example (defaults to "false" which does not use dotenv-safe)
        })
    ]
};


mix
    .js(['resources/assets/js/vendor/app.js', 'node_modules/semantic-ui-sass/app/assets/javascripts/semantic-ui.js'], 'public/js/vendor.js')
    .js('resources/assets/js/main.js', 'public/js/main.js')
    .sass('resources/assets/sass/vendor/vendor.scss', 'public/css')
    .sass('resources/assets/sass/main.scss', 'public/css')
    .webpackConfig({
        plugins: [
            new BrowserSyncPlugin({
                open: 'local',
                proxy: process.env.WEBPACK_PROXY,
                files: ['resources/views/**/*.php', 'app/**/*.php', 'routes/**/*.php']
            })
        ]
    })
;

