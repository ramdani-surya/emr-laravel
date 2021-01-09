<?php

return [
    'resources' => [
        'css' => [
            'app' => '<link href="' . env('APP_URL') . '/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <link href="' . env('APP_URL') . '/css/icons.min.css" rel="stylesheet" type="text/css" />
                <link href="' . env('APP_URL') . '/css/app.min.css" rel="stylesheet" type="text/css" />',

            'boostrap_select'    => '<link href="' . env('APP_URL') . '/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />',
            'boostrap_tagsinput' => '<link href="' . env('APP_URL') . '/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />',

            'datatable' => '<link href="'.env('APP_URL') . '/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
                <link href = "' . env('APP_URL') . '/libs/datatables/buttons.bootstrap4.css" rel    = "stylesheet" type = "text/css" />
                <link href = "' . env('APP_URL') . '/libs/datatables/responsive.bootstrap4.css" rel = "stylesheet" type = "text/css" />
                <link href = "' . env('APP_URL') . '/libs/datatables/select.bootstrap4.css" rel     = "stylesheet" type = "text/css" />',

            'dropzone' => '<link href="' . env('APP_URL') . '/libs/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />',

            'footable' => '<link href="' . env('APP_URL') . '/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />',

            'modal' => '<link href="' . env('APP_URL') . '/libs/custombox/custombox.min.css" rel="stylesheet" type="text/css" />',

            'select2' => '<link href="' . env('APP_URL') . '/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />',

            'sweet_alert' => '<link href="' . env('APP_URL') . '/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />',

            'x_editable' => '<link href="' . env('APP_URL') . '/libs/x-editable/bootstrap-editable.css" rel="stylesheet" type="text/css" />',
        ],
        'js' => [
            'app' => '<script src="' . env('APP_URL') . '/js/app.min.js"></script>',

            'boostrap_filestyle' => '<script src="' . env('APP_URL') . '/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js"></script>',
            'boostrap_maxlength' => '<script src="' . env('APP_URL') . '/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>',
            'boostrap_select'    => '<script src="' . env('APP_URL') . '/libs/bootstrap-select/bootstrap-select.min.js"></script>',
            'boostrap_tagsinput' => '<script src="' . env('APP_URL') . '/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>',

            'datatable' => '<!-- Required datatable js -->
                <script src = "' . env('APP_URL') . '/libs/datatables/jquery.dataTables.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/datatables/dataTables.bootstrap4.min.js"></script>
                <!-- Buttons examples -->
                <script src = "' . env('APP_URL') . '/libs/datatables/dataTables.buttons.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/datatables/buttons.bootstrap4.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/datatables/dataTables.keyTable.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/datatables/dataTables.select.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/jszip/jszip.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/pdfmake/pdfmake.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/pdfmake/vfs_fonts.js"></script>
                <script src = "' . env('APP_URL') . '/libs/datatables/buttons.html5.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/datatables/buttons.print.min.js"></script>
                <!-- Responsive examples -->
                <script src = "' . env('APP_URL') . '/libs/datatables/dataTables.responsive.min.js"></script>
                <script src = "' . env('APP_URL') . '/libs/datatables/responsive.bootstrap4.min.js"></script>',
            'datatable_init' => '<script src="' . env('APP_URL') . '/js/pages/datatables.init.js"></script>',

            'dropzone' => '<script src="' . env('APP_URL') . '/libs/dropzone/dropzone.min.js"></script>',

            'footable'      => '<script src="' . env('APP_URL') . '/libs/footable/footable.all.min.js"></script>',
            'footable_init' => '<script src="' . env('APP_URL') . '/js/pages/foo-tables.init.js"></script>',

            'form_advanced_init'   => '<script src="' . env('APP_URL') . '/js/pages/form-advanced.init.js"></script>',
            'form_validation_init' => '<script src="' . env('APP_URL') . '/js/pages/form-validation.init.js"></script>',
            'form_wizard'          => '<script src="' . env('APP_URL') . '/libs/jquery-steps/jquery.steps.min.js"></script>',
            'form_wizard_init'     => '<script src="' . env('APP_URL') . '/js/pages/wizard-init.js"></script>',
            'form_masks_init'      => '<script src="' . env('APP_URL') . '/js/pages/form-masks.init.js"></script>',
            'form_masks'           => '<script src="' . env('APP_URL') . '/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
                <script src="' . env('APP_URL') . '/libs/autonumeric/autoNumeric-min.js"></script>',

            'jquery_autocomplete' => '<script src="' . env('APP_URL') . '/libs/autocomplete/jquery.autocomplete.min.js"></script>',
            'jquery_mockjax'      => '<script src="' . env('APP_URL') . '/libs/jquery-mockjax/jquery.mockjax.min.js"></script>',

            'modal' => '<script src="' . env('APP_URL') . '/libs/custombox/custombox.min.js"></script>',

            'parsley' => '<script src="' . env('APP_URL') . '/libs/parsleyjs/parsley.min.js"></script>',

            'select2' => '<script src="' . env('APP_URL') . '/libs/select2/select2.min.js"></script>',

            'semar' => '<script src="' . env('APP_URL') . '/js/semar.js"></script>',

            'sweet_alert'      => '<script src="' . env('APP_URL') . '/libs/sweetalert2/sweetalert2.min.js"></script>',
            'sweet_alert_init' => '<script src="' . env('APP_URL') . '/js/pages/sweet-alerts.init.js"></script>',

            'vendor' => '<script src="' . env('APP_URL') . '/js/vendor.min.js"></script>',

            'x_editable' => '<script src="' . env('APP_URL') . '/libs/moment/moment.min.js"></script>
                <script src="' . env('APP_URL') . '/libs/x-editable/bootstrap-editable.min.js"></script>',
            'x_editable_init' => '<script src="' . env('APP_URL') . '/js/pages/form-xeditable.init.js"></script>',
        ],
    ],
];
