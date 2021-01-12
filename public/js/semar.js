$(document).ready(function () {
    $('tbody').on('DOMNodeInserted ', function () {
        $(function () {
            $.fn.editableform.buttons = '<button type="submit" class="btn btn-primary editable-submit btn-sm waves-effect waves-light"><i class="mdi mdi-check"></i></button><button type="button" class="btn btn-danger editable-cancel btn-sm waves-effect"><i class="mdi mdi-close"></i></button>', $(".medical-prescription-row").editable({
                type: "text",
                pk: 1,
                name: "username",
                title: "Enter username",
                mode: "inline",
                inputclass: "form-control-sm"
            })
        });
    });

    $('.edit-polyclinic-btn').click(function (e) {
        let id = $(this).data('id'),
            polyclinic = $(`#name-${id}`).text(),
            location = $(`#location-${id}`).text();

        $('#edit-form').attr('action', $(this).data('url'));

        $('.edit-poliklinik').val(polyclinic);
        $('.edit-lokasi').val(location);
    });
});

$(window).on("load", function () {
    var e = $("#medical-prescription-form");
    e.footable().on("click", ".demo-delete-row", function () {
        var o = e.data("footable"),
            t = $(this).parents("tr:first");
        o.removeRow(t)
    }), $("#demo-input-search2").on("input", function (o) {
        o.preventDefault(), e.trigger("footable_filter", {
            filter: $(this).val()
        })
    }), $("#demo-btn-addrow").click(function () {
        e.data("footable").appendRow('<tr>' +
            '<td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>' +
            '<td><a href="#" class="medical-prescription-row" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Masukkan nama obat"></a></td>' +
            '<td><a href="#" class="medical-prescription-row" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Masukkan dosis"></a></td>' +
            '<td><a href="#" class="medical-prescription-row" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Masukkan pemakaian per hari"></a></td>' +
            '</tr>')
    })
});

$(function () {
    $.fn.editableform.buttons = '<button type="submit" class="btn btn-primary editable-submit btn-sm waves-effect waves-light"><i class="mdi mdi-check"></i></button><button type="button" class="btn btn-danger editable-cancel btn-sm waves-effect"><i class="mdi mdi-close"></i></button>', $(".x-editable-form").editable({
        type: "text",
        pk: 1,
        name: "username",
        title: "Enter username",
        mode: "inline",
        inputclass: "form-control-sm"
    });
});
