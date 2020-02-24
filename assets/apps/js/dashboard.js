$(document).ready(function () {
    $('.tr2').hide();

});


var crud = {};

crud.ajax = {
    et_update: function (id, cb) {
        var url = '/Admin_ita_ebit_items/del_Admin_ita_ebit_items',
            params = {
                id: id
            }

        app.ajax(url, params, function (err, data) {
            err ? cb(err) : cb(null, data);
        });
    }
}

crud.get_data = function (id, row_id) {
    crud.ajax.get_update(id, function (err, data) {
        if (err) {
            //app.alert(err);
            swal(err);
        }
        else {
            //swal('แก้ไขข้อมูลเรียบร้อยแล้ว ');
            //location.reload();
            crud.set_update(data, row_id);
        }
    });

}
$(document).on('click', 'button[data-btn="btn_expand"]', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var row_id = $("#row_id").val();
    $('.tr2').hide();
   $(this).parents('tr').next('tr').show();

});
