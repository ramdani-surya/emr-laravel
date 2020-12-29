<?php

return [
    'resources' => [
        'css' => [
            'boostrap_select'    => '<link href="' . asset('libs/bootstrap-select/bootstrap-select.min.css') . '" rel="stylesheet" type="text/css" />',
            'boostrap_tagsinput' => '<link href="' . asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.css') . '" rel="stylesheet" type="text/css" />',

            'datatable' => '<link href="'.asset('libs/datatables/dataTables.bootstrap4.css') . '" rel="stylesheet" type="text/css" />
                <link href = "' . asset('libs/datatables/buttons.bootstrap4.css') . '" rel    = "stylesheet" type = "text/css" />
                <link href = "' . asset('libs/datatables/responsive.bootstrap4.css') . '" rel = "stylesheet" type = "text/css" />
                <link href = "' . asset('libs/datatables/select.bootstrap4.css') . '" rel     = "stylesheet" type = "text/css" />',

            'dropzone' => '<link href="' . asset('libs/dropzone/dropzone.min.css') . '" rel="stylesheet" type="text/css" />',

            'footable' => '<link href="' . asset('libs/footable/footable.core.min.css') . '" rel="stylesheet" type="text/css" />',

            'modal' => '<link href="' . asset('libs/custombox/custombox.min.css') . '" rel="stylesheet" type="text/css" />',

            'select2' => '<link href="' . asset('libs/select2/select2.min.css') . '" rel="stylesheet" type="text/css" />',

            'sweet_alert' => '<link href="' . asset('libs/sweetalert2/sweetalert2.min.css') . '" rel="stylesheet" type="text/css" />',

            'x_editable' => '<link href="' . asset('libs/x-editable/bootstrap-editable.css') . '" rel="stylesheet" type="text/css" />',
        ],
        'js' => [
            'boostrap_filestyle' => '<script src="' . asset('libs/bootstrap-filestyle2/bootstrap-filestyle.min.js') . '"></script>',
            'boostrap_maxlength' => '<script src="' . asset('libs/bootstrap-maxlength/bootstrap-maxlength.min.js') . '"></script>',
            'boostrap_select'    => '<script src="' . asset('libs/bootstrap-select/bootstrap-select.min.js') . '"></script>',
            'boostrap_tagsinput' => '<script src="' . asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') . '"></script>',

            'datatable' => '<!-- Required datatable js -->
                <script src = "' . asset('libs/datatables/jquery.dataTables.min.js') . '"></script>
                <script src = "' . asset('libs/datatables/dataTables.bootstrap4.min.js') . '"></script>
                <!-- Buttons examples -->
                <script src = "' . asset('libs/datatables/dataTables.buttons.min.js') . '"></script>
                <script src = "' . asset('libs/datatables/buttons.bootstrap4.min.js') . '"></script>
                <script src = "' . asset('libs/datatables/dataTables.keyTable.min.js') . '"></script>
                <script src = "' . asset('libs/datatables/dataTables.select.min.js') . '"></script>
                <script src = "' . asset('libs/jszip/jszip.min.js') . '"></script>
                <script src = "' . asset('libs/pdfmake/pdfmake.min.js') . '"></script>
                <script src = "' . asset('libs/pdfmake/vfs_fonts.js') . '"></script>
                <script src = "' . asset('libs/datatables/buttons.html5.min.js') . '"></script>
                <script src = "' . asset('libs/datatables/buttons.print.min.js') . '"></script>
                <!-- Responsive examples -->
                <script src = "' . asset('libs/datatables/dataTables.responsive.min.js') . '"></script>
                <script src = "' . asset('libs/datatables/responsive.bootstrap4.min.js') . '"></script>',
            'datatable_init' => '<script src="' . asset('js/pages/datatables.init.js') . '"></script>',

            'dropzone' => '<script src="' . asset('libs/dropzone/dropzone.min.js') . '"></script>',

            'footable'      => '<script src="' . asset('libs/footable/footable.all.min.js') . '"></script>',
            'footable_init' => '<script src="' . asset('js/pages/foo-tables.init.js') . '"></script>',

            'form_advanced_init'   => '<script src="' . asset('js/pages/form-advanced.init.js') . '"></script>',
            'form_validation_init' => '<script src="' . asset('js/pages/form-validation.init.js') . '"></script>',
            'form_wizard'          => '<script src="' . asset('libs/jquery-steps/jquery.steps.min.js') . '"></script>',
            'form_wizard_init'     => '<script src="' . asset('js/pages/wizard-init.js') . '"></script>',
            'form_masks_init'      => '<script src="' . asset('js/pages/form-masks.init.js') . '"></script>',
            'form_masks'           => '<script src="' . asset('libs/jquery-mask-plugin/jquery.mask.min.js') . '"></script>
                <script src="' . asset('libs/autonumeric/autoNumeric-min.js') . '"></script>',

            'jquery_autocomplete' => '<script src="' . asset('libs/autocomplete/jquery.autocomplete.min.js') . '"></script>',
            'jquery_mockjax'      => '<script src="' . asset('libs/jquery-mockjax/jquery.mockjax.min.js') . '"></script>',

            'modal' => '<script src="' . asset('libs/custombox/custombox.min.js') . '"></script>',

            'parsley' => '<script src="' . asset('libs/parsleyjs/parsley.min.js') . '"></script>',

            'select2' => '<script src="' . asset('libs/select2/select2.min.js') . '"></script>',

            'semar' => '<script src="' . asset('js/semar.js') . '"></script>',

            'sweet_alert'      => '<script src="' . asset('libs/sweetalert2/sweetalert2.min.js') . '"></script>',
            'sweet_alert_init' => '<script src="' . asset('js/pages/sweet-alerts.init.js') . '"></script>',

            'x_editable' => '<script src="' . asset('libs/moment/moment.min.js') . '"></script>
                <script src="' . asset('libs/x-editable/bootstrap-editable.min.js') . '"></script>',
            'x_editable_init' => '<script src="' . asset('js/pages/form-xeditable.init.js') . '"></script>',
        ],
    ],
];
