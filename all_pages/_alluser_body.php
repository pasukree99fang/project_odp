<?php include 'connectdb.php';?>
<?phpsession_start();?>
<?php
  $strSQL = "SELECT * FROM tb_user";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>

<div class="row">
<div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">ALL User</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Document">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tr>
                    <th width="100"> <div align="center">Username </div></th>
                    <th width="150"> <div align="center">Name </div></th>
                    <th width="150"> <div align="center">Email </div></th>
                    <th width="150"> <div align="center">Admin </div></th>
                    <th width="150"> <div align="center">Approval </div></th>
                    <th width="150"> <div align="center">Delete user </div></th>
                </tr>
                <?php
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                <tr>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_username"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_firstname"];?> <?php echo $objResult["us_lastname"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_email"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_isadmin"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_isapproval"];?></div></td>
                    <td><div align="center"><button type="button" class="btn btn-info btn-flat">Delete!</button></div></td>
                </tr>
                <?php } ?>
              </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
</div>
  <?php
    mysqli_close($mysqli);
  ?>