<?php
            $title = "QUALITY CONTROL SYSTEM
            ";
        ?>
<?php include_once('../conn.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <?php include_once('../import_css.php'); ?>

    <?php include_once('../css_dos.php'); ?>
    <?php include_once('css.php'); ?>


</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color:#ecedda;">

    <div class="wrapper">

        <?php include_once('../func_dos.php'); ?>


        <!-- Content Wrapper. Contains page content -->
        <div>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid" style="height:40px;">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-primary btn-lg"
                                style="font-size:20px;cursor: default;"><?php echo $title;?></button>


                        </div><!-- /.col -->
                        <div class="col-sm-8">
                            <ol class="breadcrumb float-sm-right">
                                <button id="btnBack" type="button" onclick="location.replace('../');"
                                    class="btn btn-primary"><span><i class="fa fa-reply"></i></span> Back</button>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box" data-toggle="modal" data-target="#modal_master">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-plus"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">เพิ่ม </span>
                                    <b class="info-box-text">Add </b>

                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i
                                        class="fas fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">ลบ </span>
                                    <b class="info-box-text">Delete </b>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-book"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">รายงาน </span>
                                    <b class="info-box-text">Report </b>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <!-- <input type="text" name="test" id="test">
                        <input type="text" name="test1" id="test1"> -->


                    </div>
                    <!-- /.row -->



                    <div id="<?php echo $title;?>_view" style="margin:20px 40px;" class="card default">
                        <div class="card-header border-transparent">
                            <h3 class="card-title"> <?php echo $title;?></h3>

                            <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">

                            <table id="tableData" class="table m-0">
                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>Charge</th>
                                        <th>Coilno</th>
                                        <th>วันที่ผลิต</th>
                                        <th>DIAM</th>
                                        <th>ลักษณะลวด</th>
                                        <th>Tenslie</th>
                                        <th>Yield</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> -->
                            <!-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
                        </div>
                        <!-- /.card-footer -->
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.control-sidebar -->

        <!-- Modal table_id -->
        <!-- <div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_master" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header" style="display:inline-block;text-align:center;">                        
                        <h4 class="modal-title" id="myModalLabel">เพิ่มสินค้า</h4>
                    </div>
                    <div class="modal-body" style="overflow-x: scroll;">

                        <table id="tableAdd" class="table table-striped">
                            <thead>
                                <tr>
                                    <td>รหัส</td>
                                    <td>Charge</td>
                                    <td>Coilno</td>
                                    <td>วันที่ผลิต</td>
                                    <td>DIAM</td>
                                    <td>ลักษณะลวด</td>
                                    <td>Tensile</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div> -->

        <div class="modal" tabindex="-1" id="modal_master" role="dialog">
            <div class="modal-dialog-master" role="document">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="modal-body">
                        <table id="tablemaster" style="margin:20px;padding:100px;">
                            <tbody>
                                <tr>
                                    <td>
                                        กะ (D:G:N) :
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        รหัสสินค้า :
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="product_code"
                                                id="product_code">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" data-toggle="modal"
                                                    data-target="#modal_product_code" type="button"><span
                                                        class="fa fa-search"></span></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ขนาด :
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        วันที่ผลิต :
                                    </td>
                                    <td><input type="date" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        Wirerod :
                                    </td>
                                    <td><select id="wirecode" class="form-control">
                                            <option value="N">N</option>
                                            <option value="Y">Y</option>
                                        </select></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>F10 :ตกลง</td>
                                    <td>Esc :ยกเลิก</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_add" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header" style="display:inline-block;text-align:center;">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title" id="myModalLabel">QUALITY CONTROL SYSTEM<br>FINISHED GOODS</h4>
                    </div>
                    <div class="modal-body" style="overflow-x: scroll;">

                        <table id="tableAdd" class="table table-striped">
                            <thead>
                                <tr>
                                    <td>รหัส</td>
                                    <td>Charge</td>
                                    <td>Coilno</td>
                                    <td>วันที่ผลิต</td>
                                    <td>DIAM</td>
                                    <td>ลักษณะลวด</td>
                                    <td>Tensile</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_edit" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header" style="display:inline-block;text-align:center;">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title" id="myModalLabel">QUALITY CONTROL SYSTEM <br>FINISHED GOODS</h4>
                    </div>
                    <div class="modal-body">

                        <table id="tableEdit" class="table">
                            <tr>
                                <td>
                                    รหัสสินค้า
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="PCW52">

                                </td>
                                <td>
                                    ขนาด
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="5">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    วันที่ผลิต
                                </td>
                                <td>
                                    <input type="date" class="form-control" value="2021-02-18">

                                </td>
                                <td>
                                    วันที่ TEST
                                </td>
                                <td>
                                    <input type="date" class="form-control" value="2021-02-18">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Change
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="100-6291">

                                </td>
                                <td>
                                    CoilNo
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="1003">

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    AREA
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="0.000">

                                </td>
                                <td>
                                    น้ำหนักลวด
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="766">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    YIELD STRENGTH
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0.000">

                                </td>
                                <td>
                                    TENSILE STRENGTH
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0.000">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    UNIT WEIGHT
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0.000">

                                </td>
                                <td>
                                    CAMBER
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0.0">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    INDENT DEPTH
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0.00">

                                </td>
                                <td>
                                    GRADE
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    BREAKING LOAD
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0">

                                </td>
                                <td>
                                    YIELD LOAD
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    REVERSE BENDING
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0">

                                </td>
                                <td>
                                    ELONG
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="0">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ลักษณะลวด
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="T">

                                </td>
                                <td>
                                    PASS
                                </td>
                                <td>
                                    <input type="number" class="form-control" value="N">

                                </td>
                            </tr>
                        </table>


                    </div>
                    <div class="modal-footer-full-width  modal-footer">

                        <span class="mr-auto"> F10 เพื่อยืนยัน / Esc เพื่อยกเลิก</span>




                        <button id="btnClose" type="button" class="btn btn-default btn-md btn-rounded"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./wrapper -->

    <?php include_once('../import_js.php');?>
    <?php include_once('js.php');?>
</body>

</html>