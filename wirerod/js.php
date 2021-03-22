<script>
//โฟกัส
$('#modal_add').on('show.bs.modal', function(event) {
    //    alert('test');
    var modal = $(this);
    setTimeout(function() {

        $("#modal_add input").first().focus();

    }, 500);

})

$(function() {

    getFG();
    CreateRow(0);

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

function getFG() {
    $.ajax({
        type: "POST",
        url: "ajax/get_fg.php",
        success: function(result) {
            var supstatus, suptitle;

            for (count = 0; count < result.coilno.length; count++) {


                $('#tableData tbody').append(
                    '<tr id="' + result.coilno[
                        count] + '" onClick="onSelectSO(this.id);" ><td>' + result.group[count] +
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