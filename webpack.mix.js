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

mix.js('resources/assets/modules_js/app.js', 'public/js');
mix.scripts(['resources/assets/modules_js/setting_all.js',  'resources/assets/modules_js/setting_ajax.js', 'resources/assets/modules_js/setting_chart.js', 'resources/assets/modules_js/setting_calender.js',
'resources/assets/modules_js/setting_hour.js', 'resources/assets/modules_js/setting_coast.js', 'resources/assets/modules_js/setting_inputs.js' ], 'public/js/main.min.js');
mix.copy('resources/assets/modules_images/', 'public/images/');