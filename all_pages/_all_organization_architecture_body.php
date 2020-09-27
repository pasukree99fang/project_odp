<?php include 'connectdb.php';?>
<?phpsession_start();?>
<?php
  $strSQL1 = "SELECT * FROM tb_department";
  $objQuery1 = mysqli_query($mysqli,$strSQL1);

  $strSQL2 = "SELECT * FROM tb_sub_department";
  $objQuery2 = mysqli_query($mysqli,$strSQL2);

  $strSQL3 = "SELECT * FROM tb_position";
  $objQuery3 = mysqli_query($mysqli,$strSQL3);
?>

<div class="row">
<div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">ALL Department</h3>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <div class="box-tools pull-right">
                    <div class="has-feedback">
                        <!-- <input type="text" class="form-control input-sm" placeholder="Search Document"> -->
                        <!-- <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
                    </div>
                </div>
                
                </div>
                <div class="box-body no-padding">
                    <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th width="100"> <div align="center">Department </div></th>
                            <th width="150"> <div align="center">Edit Document</div></th>
                            <th width="150"> <div align="center">Delete Document</div></th>
                        </tr>
                        <?php
                            while($objResult1 = mysqli_fetch_array($objQuery1))
                            { ?>
                        <tr>
                            <td class="mailbox-name"><div align="center"><?php echo $objResult1["dpm_name"];?></div></td>
                            <td><div align="center"><button type="button" class="btn btn-info btn-flat">Edit!</button></div></td>
                            <td><div align="center"><button type="button" class="btn btn-info btn-danger ">Delete!</button></div></td>
                        </tr>
                        <?php } ?>
                    </table>
                    </div>
                </div>

            </div>

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">ALL Sub department</h3>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <!-- <input type="text" class="form-control input-sm" placeholder="Search Document"> -->
                            <!-- <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
                        </div>
                    </div>
                </div>

                <div class="box-body no-padding">
                    <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th width="100"> <div align="center">Sub department </div></th>
                            <th width="150"> <div align="center">Edit Document</div></th>
                            <th width="150"> <div align="center">Delete Document</div></th>
                        </tr>
                        <?php
                            while($objResult2 = mysqli_fetch_array($objQuery2))
                            { ?>
                        <tr>
                            <td class="mailbox-name"><div align="center"><?php echo $objResult2["sub_name"];?></div></td>
                            <td><div align="center"><button type="button" class="btn btn-info btn-flat">Edit!</button></div></td>
                            <td><div align="center"><button type="button" class="btn btn-info btn-danger ">Delete!</button></div></td>
                        </tr>
                        <?php } ?>
                    </table>
                    </div>
                </div>

            </div>

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">ALL Position</h3>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <!-- <input type="text" class="form-control input-sm" placeholder="Search Document"> -->
                            <!-- <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
                        </div>
                    </div>
                </div>

                

                <div class="box-body no-padding">
                    <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th width="100"> <div align="center">Position </div></th>
                            <th width="150"> <div align="center">Edit Document</div></th>
                            <th width="150"> <div align="center">Delete Document</div></th>
                        </tr>
                        <?php
                            while($objResult3 = mysqli_fetch_array($objQuery3))
                            { ?>
                        <tr>
                            <td class="mailbox-name"><div align="center"><?php echo $objResult3["pst_name"];?></div></td>
                            <td><div align="center"><button type="button" class="btn btn-info btn-flat">Edit!</button></div></td>
                            <td><div align="center"><button type="button" class="btn btn-info btn-danger ">Delete!</button></div></td>
                        </tr>
                        <?php } ?>
                    </table>
                    </div>
                </div>

            </div>


        </div>
</div>
  <?php
    mysqli_close($mysqli);
  ?>