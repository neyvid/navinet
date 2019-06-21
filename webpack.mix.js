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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/myAdminJs.js','public/js/admin/myAdminJs.js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy(['node_modules/bootstrap/dist/js/bootstrap.min.js','node_modules/raphael/raphael.min.js','node_modules/morris.js/morris.min.js','node_modules/jquery-sparkline/jquery.sparkline.min.js','node_modules/datatables.net-bs/js/dataTables.bootstrap.min.js','node_modules/datatables.net/js/jquery.dataTables.min.js'],'public/js/admin')
    .styles('resources/css/frontend.css','public/css/frontend.css')
    .copy('node_modules/font-awesome/css/font-awesome.min.css','public/css/admin')
    .copyDirectory('node_modules/font-awesome/fonts','public/css/admin/fonts')
    .copy(['node_modules/Ionicons/dist/css/ionicons.min.css','node_modules/morris.js/morris.css','node_modules/jvectormap/jquery-jvectormap.css','node_modules/bootstrap-daterangepicker/daterangepicker.css','node_modules/datatables.net-bs/css/dataTables.bootstrap.min.css'],'public/css/admin');
