const elixir = require('laravel-elixir')

//require('laravel-elixir-vue')

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir(mix => {
    mix.sass('app.scss')
        .sass('custom.scss')
        .sass('custom-arabic.scss')
        .sass('custom-english.scss')
        .styles([

                '../../../metronic_v4.5.6/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css',
                '../../../metronic_v4.5.6/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
                '../../../metronic_v4.5.6/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
                '../../../metronic_v4.5.6/theme/assets/layouts/layout/css/layout.min.css',
                '../../../metronic_v4.5.6/theme/assets/layouts/layout/css/themes/darkblue.min.css',
//<!-- END GLOBAL MANDATORY STYLES -->
                '../../../metronic_v4.5.6/theme/assets/global/css/components.min.css',
                '../../../metronic_v4.5.6/theme/assets/global/css/plugins.min.css',
                '../../../metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css',
                '../../../metronic_v4.5.6/theme/assets/global/plugins/cubeportfolio/css/cubeportfolio.css',
            ],
            'public/css/backend.css'
        )
        .styles([
                '../../../bower_components/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css'
            ],
            'public/css/gallery.css'
        )
        .styles([
                //
            ],
            'public/css/frontend.css'
        )
        .styles([
                'bootstrap-rtl.min.css'
            ],
            'public/css/bootstrap-rtl.min.css'
        )
        .webpack('app.js')
        //::::: javascripts :::::
        .scripts([
            //<!-- BEGIN CORE PLUGINS -->
            '../../../metronic_v4.5.6/theme/assets/global/plugins/jquery.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js',
            // if internet explorer
            '../../../metronic_v4.5.6/theme/assets/global/plugins/respond.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/excanvas.min.js',
            // end if
            '../../../metronic_v4.5.6/theme/assets/global/plugins/js.cookie.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/jquery.blockui.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
            //<!-- END CORE PLUGINS -->

            //<!-- BEGIN THEME GLOBAL SCRIPTS -->
            '../../../metronic_v4.5.6/theme/assets/global/scripts/app.min.js',
            //<!-- END THEME GLOBAL SCRIPTS -->

            //<!-- BEGIN PAGE LEVEL PLUGINS -->
            '../../../metronic_v4.5.6/theme/assets/layouts/global/scripts/quick-sidebar.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/moment.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/morris/morris.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/morris/raphael-min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/counterup/jquery.waypoints.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/counterup/jquery.counterup.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/flot/jquery.flot.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/flot/jquery.flot.resize.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/flot/jquery.flot.categories.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/jquery.sparkline.min.js',
            //<!-- END PAGE LEVEL PLUGINS -->

            //<!-- BEGIN PAGE LEVEL SCRIPTS -->
            '../../../metronic_v4.5.6/theme/assets/pages/scripts/dashboard.min.js',
            //<!-- END PAGE LEVEL SCRIPTS -->
            '../../../metronic_v4.5.6/theme/assets/layouts/global/scripts/quick-sidebar.min.js',
            '../../../metronic_v4.5.6/theme/assets/layouts/layout/scripts/layout.min.js',
            '../../../metronic_v4.5.6/theme/assets/layouts/layout/scripts/demo.min.js',
            //'../../../metronic_v4.5.6/theme/assets/global/plugins/dropzone/dropzone.min.js',
            '../../../metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js',
            '../../../node_modules/tinymce/tinymce.min.js',
        ], 'public/js/backend.js')
        .scripts([
            //
        ], 'public/js/frontend.js')
        .scripts([
            //
            '../../../bower_components/bower_installer/js/pusher-websocket-iso/pusher.js',
        ], 'public/js/pusher.js')
        .scripts([
            //'jquery.blueimp-gallery.min.js',
            '../../../bower_components/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js'
            //'../../../bower_components/blueimp-gallery/js/blueimp-gallery.min.js'
        ], 'public/js/gallery.js')

})
