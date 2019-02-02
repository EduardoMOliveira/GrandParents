$(function() {

    function getParent(grandparent) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url:'/api/parentes/' + grandparent,
            type: 'post',
            dataType: 'json',
            success: function (result) {

                $("#tab-parents tr").remove();
                cbCheckedNew(false);

                if(result) {

                    HTML = new Array();

                    $.each(result[0].parents, function(k,p) {
                        HTML.push('<tr>');
                        HTML.push('<td>'+ p.name + '</td>');
                        HTML.push('<td><input type="checkbox" name="parents[]" id="parents_' + p.id + '" class="ck_parents" value=' + p.id + '></td>');
                        HTML.push('</tr>');
                    });

                    $("#tab-parents").append(HTML.join(''));
                    $("#table_parents").show();
                }
            }
        });
    }

    function getSon(sons) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: "/api/filhos",
            type: "POST",
            dataType: "json",
            data: { message: sons},
            success: function (result) {

            }
        });

    }
    function cbListAll() {
        return $(".ck_parents").toArray().map(function (check) {
            return $(check).val();
        });
    }

    function chkListChecked() {
        return $(".ck_parents:checked").toArray().map(function (check) {
            return $(check).val();
        });

    }

    function cbCheckedNew(status) {
        $("#novo").prop("checked", status);
    }

    function cbCheckedClick() {
        $("#novo").change(function () {
            cbCheckedNew(false);
            var chklistaAll = cbListAll();
            $.each(chklistaAll, function(k, v) {
                $("#parents_" + chklistaAll[k]).prop("checked", false);
                $("#parents_" + chklistaAll[k]).prop("disabled", false);
            });
        });
    }

    function cbHide(lista, status) {
        $("#parents_" + lista).attr("disabled", status);
    }
    $(document).ready(function() {
        cbCheckedClick();
        $("#grandParents").change(function(){
            var grandparent = $(this).val();

            if(grandparent != '') {
                getParent(grandparent);
            } else {
                $("#table_parents").hide();
            }
        });

        $(document).on('click','.ck_parents', function() {
            var chklista = chkListChecked();
            if (chklista.length == 2) {
                var chklistaAll = cbListAll();
                $.each(chklistaAll, function(k, v) {
                    if (chklistaAll[k] == chklista[k]) {
                        cbHide(chklistaAll[k], "false");
                        cbCheckedNew(false);
                    } else {
                        cbHide(chklistaAll[k], "true");
                        cbCheckedNew(true);
                    }
                });

                getSon(chklista);
            }
        });
    })
})
