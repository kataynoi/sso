$(function () {

    var report = {};
    report.ajax = {

        get_ita: function (year, cb) {
            var url = '/welcome/get_ita',
                params = {
                    year: year
                };

            app.ajax(url, params, function (err, data) {
                err ? cb(err) : cb(null, data);
            });
        }
    }

    report.get_ita = function (year) {
        report.ajax.get_ita(year, function (err, data) {

            if (err) {
                app.alert(err);
                $('#tbl_ita > tbody').append('<tr><td colspan="2">ไม่พบรายการ</td></tr>');
            }
            else {
                report.set_ita(data);
            }
        });
    };

    report.set_ita = function (data) {
        $('#tbl_ita > tbody').empty();
        if (_.size(data.rows) > 0) {
            var no = 1, items = '<ul class="list-group">';
            _.each(data.rows, function (v) {
                var no2 = 1, link = '', file = '',items_no='';

                if(v.ita_items.length>0){
                    items_no ='<span class="pull-right bg-primary btn btn-sm btn-outline btn-success" data-btn="btn_expand">'+v.ita_items.length+'</span>';
                }

                for (i = 0; i < v.ita_items.length; ++i) {

                        file = '', link = '';
                    if (v.ita_items[i].file != '') {
                        file = '<a href="' + base_url + 'assets/uploads/' + v.ita_items[i].file + '" target="_blank">' +
                            ' <span class="btn pull-right"><i class="fa fa-save" style="color:green"></i></span> ' +
                            '</a>';
                    }
                    if (v.ita_items[i].link != '') {
                        link = '<a href="' + v.ita_items[i].link + '" target="_blank">' +
                            ' <span class="btn pull-right "><i class="fa fa-link" style="color:green"></i></span> ' +
                            '</a>';
                    }
                    items += '<li class="list-group-item" style="color:blue">' + no + '.' + no2 + ' ' + v.ita_items[i].name + '' + file + '' + link
                    '</li>';
                    no2++;
                }
                items += '</ul>'
                $('#tbl_ita > tbody').append(
                    '<tr>' +
                    '<td>' + no + '</td>' +
                    '<td>' + v.name +'</td>' +
                    '<td>'+items_no+'</td>' +
                    '</tr>' +
                    '<tr class="tr2" hidden ><td colspan="3">' + items + '</td></tr>'
                );
                no++;
                items = '';

            });
        }
    }

    $(document).on('click', 'span[data-btn="btn_expand"]', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var row_id = $("#row_id").val();
        $('.tr2').hide();
        $(this).parents('tr').next('tr').show();

    });

    report.get_ita(year);
    $('.tr2').hide();
});



