<script>
//โฟกัส
$('#modal_add').on('show.bs.modal', function(event) {
    //    alert('test');
    var modal = $(this);
    setTimeout(function() {

        $("#modal_add input").first().focus();

    }, 500);

})
//โฟกัส
$('#modal_master').on('show.bs.modal', function(event) {
    //    alert('test');
    var modal = $(this);
    setTimeout(function() {

        $("#modal_master input").first().focus();

    }, 500);

})

$(function() {

    getFG();
    CreateRow(0);

    $("#tablemaster").keydown(function(e) {
        if (e.keyCode === 121) {
            e.preventDefault(); // Ensure it is only this code that runs

        var group = [];
        var charge = [];
        var coilno = [];
        var pdate = [];
        var diam = [];
        var nospec = [];
        var tensile = [];
        var yield = [];
        var pass = [];
        $('#modal_master').modal('hide');
        $('#modal_add').modal('show');
        }
    });

    $("#tableAdd").keydown(function(e) {
        if (e.keyCode === 121) {
            e.preventDefault(); // Ensure it is only this code that runs

        var group = [];
        var charge = [];
        var coilno = [];
        var pdate = [];
        var diam = [];
        var nospec = [];
        var tensile = [];
        var yield = [];
        var pass = [];

        $('#tableAdd tbody tr').each(function(key) {
            group.push($(this).find("td #group" + (++key)).val());
        });
        
        $('#tableAdd tbody tr').each(function(key) {
            charge.push($(this).find("td #charge" + (++key)).val());
        });
        $('#tableAdd tbody tr').each(function(key) {
            coilno.push($(this).find("td #coilno" + (++key)).val());
        });
        $('#tableAdd tbody tr').each(function(key) {
            coilno.push($(this).find("td #coilno" + (++key)).val());
        });
        $('#tableAdd tbody tr').each(function(key) {
            pdate.push($(this).find("td #pdate" + (++key)).val());
        });
        $('#tableAdd tbody tr').each(function(key) {
            diam.push($(this).find("td #diam" + (++key)).text());
        });
        $('#tableAdd tbody tr').each(function(key) {
            nospec.push($(this).find("td #nospec" + (++key)).val());
        });
        $('#tableAdd tbody tr').each(function(key) {
            tensile.push($(this).find("td #tensile" + (++key)).val());
        });
        $('#tableAdd tbody tr').each(function(key) {
            yield.push($(this).find("td #yield" + (++key)).text());
        });
        $('#tableAdd tbody tr').each(function(key) {
            pass.push($(this).find("td #pass" + (++key)).val());
        });
        
        // alert(group);
            // $.ajax({
            //     type: "POST",
            //     url: "ajax/add_fg.php",
            //     data: "&amount=" + amount + "&stcode=" + stcode +
            //         "&unit=" + unit +
            //         "&recamount=" + recamount +
            //         "&price=" + price +
            //         "&discount=" + discount +
            //         "&pocode=" + pocode +
            //         "&places=" + places + "&stcode2=" + stcode2 + "&amount2=" + amount2 +
            //         "&unit2=" + unit2 +
            //         "&price2=" + price2 +
            //         "&places2=" + places2,
            //     success: function(result) {
            //         if (result.status == 1) {
            //             alert(result.message);
            //             window.location.reload();
            //             // console.log(result.sql);
            //         } else {
            //             alert(result.message);
            //             console.log(result.message);
            //         }
            //     }
            // });             

            // alert("บันทึกสำเร็จ");
        }
    });


});

function onSelectFG(code) {

    // $("#editsocode").val(socode);
    // $("#tableSODetail tbody").empty();
    // $("#tableEditSODetail").show();
    // $("#printsocode").val(socode);
    $("#frmEdit").find("input[type=text],input[type=date], textarea").val("");

}

function onSelectSO(socode) {    

$.ajax({
    type: "POST",
    url: "ajax/getsup_fg.php",
    data: "idcode=" + code,
    success: function(result) {

        $("#editsocode").val(result.socode);
        $("#editcuscode").val(result.cuscode);
        $("#editcusname").val(result.cusname);
        $("#editaddress").val(result.address);
        $("#edittel").val(result.tel);
        $("#editsodate").val(result.sodate);
        $("#editdeldate").val(result.deldate);
        $("#editpaydate").val(result.paydate);
        $("#editpayment").val(result.payment);
        $("#editcurrency").val(result.currency);
        $("#editremark").val(result.remark);
        $("#editsalecode").val(result.salecode);
        $("input[name=editvat][value=" + result.vat + "]").prop('checked', true);

    }
});

if (($("#" + socode + " td:eq(5)").text() != "สมบูรณ์") && ($("#" + socode + " td:eq(5)").text() !=
        "ยกเลิกการใช้งาน"))
    $("#btnCancle").show();
else
    $("#btnCancle").hide();

$("#txtHead").text('แก้ไขใบสั่งขาย (Edit Sale Order)');

$("#divfrmEditSO").show();
$('#divtableSO').hide();
$("#btnBack").show();
$('#btnAddSO').hide();
$("#btnRefresh").hide();
$("#tableEditSODetail tbody").empty();
$("#tableEditSOGiveaway tbody").empty();
$('#tableEditSOGiveaway').hide();
var option = '';
$.ajax({
    type: "POST",
    url: "ajax/get_places.php",

    success: function(result) {

        for (count = 0; count < result.places.length; count++) {

            option += '<option value="' + result.placescode[count] + '">' + result
                .places[count] + '</option>';


        }
        $.ajax({
            type: "POST",
            url: "ajax/getsup_sodetail.php",
            data: "idcode=" + socode,
            success: function(result) {
                for (count = 0; count < result.stcode.length; count++) {

                    $('#tableEditSODetail').append(
                        '<tr id="' + result.stcode[count] +
                        '" ><td name="sono" id="sono" ><p class="form-control-static" style="text-align:center">' +
                        result.sono[count] +
                        '</p></td><td><p class="form-control-static" style="text-align:center">' +
                        result
                        .stcode[count] +
                        '</p></td><td> <p class="form-control-static" style="text-align:left">' +
                        result.stname1[count] +
                        '</p></td><td><input type="text" class="form-control" onChange="getTotal(' +
                        result
                        .sono[count] + ');" name="amount1"  id="amount1' +
                        result.sono[count] +
                        '"  value="' +
                        result.amount[count] +
                        '"></td><td><div class="input-group"><input type="text" class="form-control" name="unit1" id="unit1' +
                        result.sono[count] + '" value="' +
                        result.unit[count] +
                        '" disabled><span class="input-group-btn"><button class="btn btn-default" data-toggle="modal" data-target="#modal_unit" data-whatever="' +
                        result.sono[count] +
                        ',tableEditSODetail,' +
                        result
                        .stcode[count] +
                        '" type="button"><span class="fa fa-search"></span></button></span></div></td><td><input type="text" class="form-control" onChange="getTotal(' +
                        result.sono[count] + ');" name="price1" id="price1' +
                        result.sono[count] + '" value="' +
                        result.price[count] +
                        '"></td><td><div class="input-group"><input type="text" class="form-control" onChange="getTotal(' +
                        result.sono[count] + ');" name="discount1" id="discount1' +
                        result.sono[count] +
                        '" value="' +
                        result.discount[count] +
                        '"><div class="input-group-addon">%</div></div></td><td ><p name="total1" id="total1' +
                        result.sono[count] +
                        '" class="form-control-static" style="text-align:right">0</p></td><td><select class="form-control" style="text-align:left" name="places1" id="places1' +
                        $('#tableEditSODetail tr').length + '" disabled>' +
                        option +
                        '</select></td></tr>'
                    );
                    getTotal(result.sono[count]);
                    $('#places1' + $('#tableEditSODetail tbody tr').length).val(result
                        .places[count]);

                }

            }
        });

        $.ajax({
            type: "POST",
            url: "ajax/getsup_sodetail_giveaway.php",
            data: "idcode=" + socode,
            success: function(result) {
                for (count = 0; count < result.stcode.length; count++) {
                    if (result.stcode.length > 0)
                        $('#tableEditSOGiveaway').show();
                    $('#tableEditSOGiveaway').append(
                        '<tr id="' + result.stcode[count] +
                        '" ><td name="sono" id="sono" ><p class="form-control-static" style="text-align:center">' +
                        $('#tableEditSOGiveaway tr').length +
                        '</p></td><td><p class="form-control-static" name="stcode2" id="stcode2' +
                        $('#tableEditSOGiveaway tr').length +
                        '" style="text-align:center">' +
                        result
                        .stcode[count] +
                        '</p></td><td><p class="form-control-static" style="text-align:left">' +
                        result
                        .stname1[count] +
                        '</p></td><td><input type="number" style="text-align:right" class="form-control" name="amount2"  id="amount2' +
                        $('#tableEditSOGiveaway tr').length +
                        '" value="' +
                        result.amount[count] +
                        '"></td><td><div class="input-group"><input type="text" class="form-control" style="text-align:center" name="unit2" id="unit2' +
                        $('#tableEditSOGiveaway tr').length + '" value="' +
                        result.unit[count] +
                        '" disabled><span class="input-group-btn"><button class="btn btn-default" data-toggle="modal" data-target="#modal_unit2" data-whatever="' +
                        $('#tableEditSOGiveaway tr').length +
                        ',tableEditSOGiveaway," type="button"><span class="fa fa-search"></span></button></span></div></td><td><select class="form-control" style="text-align:left" name="places2" id="places2' +
                        $('#tableEditSOGiveaway tr').length + '" disabled>' +
                        option +
                        '</select></td></tr>'
                    );
                    $('#places2' + $('#tableEditSOGiveaway tbody tr').length).val(result
                        .places[count]);

                }

            }
        });
    }
});


}

function getFG() {
    $.ajax({
        type: "POST",
        url: "ajax/get_fg.php",
        success: function(result) {
            var supstatus, suptitle;

            for (count = 0; count < result.coilno.length; count++) {


                $('#tableData tbody').append(
                    '<tr id="' + result.coilno[
                        count]  + '" onClick="onSelectFG(this.id);" data-toggle="modal" data-target="#modal_edit" data-whatever="@mdo" ><td>' + result.group[count] +
                    '</td><td>' + result
                    .charge[count] + '</td><td>' + result
                    .coilno[count] + '</td><td>' + result.pdate[count] + '</td><td>' + result
                    .diam[count] + '</td><td>' + result.nospec[count] +
                    '</td><td>' + result.tensile[count] +
                    '</td><td>' + result.yield[count] +
                    '</td><td>' + result.pass[count] +
                    '</td></tr>');
            }

            var table = $('#tableData').DataTable({
                "ordering": true,
                "info": false,
                "lengthChange": false,
                language: {
                    search: '',
                    searchPlaceholder: "Search..."
                }
            })


            $(".dataTables_filter input[type='search']").attr({
                size: 60,
                maxlength: 60
            });

            $(".dataTables_filter input[type='search']").css({
                "position": "relative",
                "right": "-150px"
            });

            $(".dataTables_paginate").css({
                "margin": "20px 0",
                "position": "relative",
                "right": "-270px"
            });

        }
    });
}

function CreateRow(row) {

    var numcolumn = 8;
    var tr_html = '';
    tr_html += '<tr id="tr' + row + '">';


    var name  = ["","group", "charge", "coilno","pdate", "diam", "nospec","tensile", "yield", "pass"];
    for (var count = 1; count < numcolumn; count++) {
        tr_html += '<td id="td'+name[count]+
        $("#tableAdd tr").length +
                            '" ><input id="' + name[count]+
                            $("#tableAdd tr").length +'" type="text">';
        tr_html += '</td>';

    }
    tr_html += '</tr>';
    $("#tableAdd tbody").append(tr_html);

    //event new tr
    $("#tableAdd tbody input").on("keydown", function(e) {

        if (e.key === 'Tab') {

            var lasttd;
            $('#tableAdd tbody tr td').each(function() {
                lasttd = $(this).find(':last-child')

            });

            // console.log(lasttd.parent().attr('id'));
            if ($(this).parent().attr('id') == lasttd.parent().attr('id')) {

                CreateRow($('#tableAdd tbody tr').length);
            }
        }

    });
}
</script>