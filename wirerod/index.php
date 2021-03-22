<?php
            $title = "WIRE ROD
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
                            <div class="info-box" data-toggle="modal" data-target="#modal_add">
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

                            <div class="card-tools">
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
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
        <div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_add" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header" style="display:inline-block;text-align:center;">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title" id="myModalLabel">รับเข้าวัตถุดิบ WIRE ROD</h4>
                    </div>
                    <div class="modal-body" style="overflow-x: scroll;">

                        <div class="row">
                            <div class="col-sm-3 my-1">
                                <label >รหัสผู้จำหน่าย</label>
                                <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">                                
                                
                                <button type="button" class="btn btn-primary active" data-toggle="modal"
                                    data-target="#modal_one">
                                    <span class="fa fa-search"></span></button>

                            </div>

                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">ตั้งแต่</span>
                                    <input name="min" id="min" class="form-control" type="text">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">จนถึง</span>
                                    <input name="max" id="max" class="form-control" type="text">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"></span>
                                    <select name="pay_status" id="pay_status" class="form-control">
                                        <option value=''>ทั้งหมด</option>
                                        <option value='Y'>จ่ายแล้ว</option>
                                        <option value='N'>ยังไม่จ่าย</option>
                                    </select>

                                </div>
                            </div>

                        </div>

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

    </div>
    <!-- ./wrapper -->

    <?php include_once('../import_js.php');?>
    <?php include_once('js.php');?>
</body>

</html>