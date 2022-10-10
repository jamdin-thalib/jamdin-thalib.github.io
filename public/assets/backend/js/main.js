var $table = $('#table')
var $remove = $('#remove')
var $edit = $('#edit')
var $lihat_berkas = $('#lihat_berkas')
var url = $('.url-ajax').val()
function ajaxRequest(params) {
    $.get(url + 'ajax_list?' + $.param(params.data)).then(function (res) {
        params.success(JSON.parse(res))
    })
}
function ajax_error_handling(jqXHR, exception, thrownError) {
    Lobibox.notify('error', {
        position: 'top right',
        msg: 'Error code' + jqXHR.status + ', ' + thrownError + ', ' + exception
    });
    $('#spinner').hide();
}
function klik(url){
    swin = window.open(url,'win','scrollbars,width=1000,height=600,top=80,left=140,status=yes,toolbar=no,menubar=yes,location=no');
    swin.focus();
}
(function ($) {
    "use strict";
    $(document).bind("ajaxSend", function() {
		$("#spinner").show();
	}).bind("ajaxStop", function() {
		$("#spinner").hide();
	});
    $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length)
        $edit.prop('disabled', !$table.bootstrapTable('getSelections').length)
        $lihat_berkas.prop('disabled', !$table.bootstrapTable('getSelections').length)
    })
    $edit.bind('click', function (e) {
        e.preventDefault();
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        })
        $.ajax({
            url: url + 'edit',
            type: 'POST',
            data: {
                id: ids
            },
            dataType: "html",
            success: function (response) {
                $('#modal_content').modal({
                    backdrop: 'static'
                });
                $('#modal_content').html(response);
            },
            error: function (jqXHR, exception, thrownError) {
                ajax_error_handling(jqXHR, exception, thrownError);
            }
        });
    });
    $lihat_berkas.bind('click', function (e) {
        e.stopImmediatePropagation();
        // var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
        //     return row.id;
        // });
        var ids = JSON.stringify($table.bootstrapTable('getSelections'))
        var a = JSON.parse(ids);
        $.ajax({
            url: url + 'edit',
            type: 'POST',
            data: {id: a[0].id,nama:a[0].full_name},
            dataType: "html",
            success: function (response) {
                $('#modal_content').modal({
                    backdrop: 'static'
                });
                $('#modal_content').html(response);
            },
            error: function (jqXHR, exception, thrownError) {
                ajax_error_handling(jqXHR, exception, thrownError);
            }
        });
    });
    $remove.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        })
        var name = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.nama
        })
        Lobibox.confirm({
            msg: 'Anda Yakin Akan Menghapus Data ' + name + '?',
            buttons: {
                yes: { 'class': 'btn btn-success', text: 'Ya' }, no: { 'class': 'btn btn-danger', text: 'Tidak' }
            }, callback: function (lobibox, type) {
                if (type === 'yes') {
                    $.ajax({
                        url: url + 'save',
                        type: 'post',
                        data: {
                            id: ids,
                            action: 'delete'
                        },
                        success: function (response) {
                            var data = $.parseJSON(response);
                            Lobibox.notify(data.type, {
                                position: 'top right',
                                msg: data.text
                            });
                            $('#table').bootstrapTable('refresh');
                        }, error: function (jqXHR, exception, thrownError) {
                            ajax_error_handling(jqXHR, exception, thrownError);
                        }
                    });
                } else { $remove.prop('disabled', true) }
            }
        });
    })
    $('.vaerifikasi').click(function(e){
        alert($(this).attr('href'))
    })
    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    jQuery('nav#dropdown').meanmenu();
    /*----------------------------
     jQuery myTab
    ------------------------------ */
    $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
    $('#myTab3 a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
    $('#myTab4 a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('#single-product-tab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');

    });
    // Collapse ibox function
    $('#sidebar ul li').on('click', function () {
        var button = $(this).find('i.fa.indicator-mn');
        button.toggleClass('fa-plus').toggleClass('fa-minus');

    });
    /*-----------------------------
            Menu Stick
        ---------------------------------*/
    $(".sicker-menu").sticky({ topSpacing: 0 });

    $('#sidebarCollapse').on('click', function () {
        $("body").toggleClass("mini-navbar");
        SmoothlyMenu();
    });
    $(document).on('click', '.header-right-menu .dropdown-menu', function (e) {
        e.stopPropagation();
    });


    /*----------------------------
     wow js active
    ------------------------------ */
    new WOW().init();

    /*----------------------------
     owl active
    ------------------------------ */
    $("#owl-demo").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 4,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
    });

    /*----------------------------
     price-slider active
    ------------------------------ */
    $("#slider-range").slider({
        range: true,
        min: 40,
        max: 600,
        values: [60, 570],
        slide: function (event, ui) {
            $("#amount").val("£" + ui.values[0] + " - £" + ui.values[1]);
        }
    });
    $("#amount").val("£" + $("#slider-range").slider("values", 0) +
        " - £" + $("#slider-range").slider("values", 1));

    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

})(jQuery); 