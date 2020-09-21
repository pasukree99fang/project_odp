<?php include 'connectdb.php';?>
<?phpsession_start();?>
<?php
  $strSQL = "SELECT * FROM tb_form_element";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>

<div class="row">
<div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">All Document</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Document">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
            </div>
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tr>
                    <th width="100"> <div align="center">Files ID </div></th>
                    <th width="150"> <div align="center">Document Title </div></th>
                    <!-- <th width="150"> <div align="center">Files Name </div></th> -->
                    <th width="150"> <div align="center">... </div></th>
                </tr>
                <?php
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                <tr>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["ele_id"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["ele_title"];?></div></td>
                    <!-- <td class="mailbox-subject"><center><a href="file/<?php echo $objResult["ele_version_id"];?>"><?php echo $objResult["ele_version_id"];?></a></center></td> -->
                    <td><div align="center"><button type="button" class="btn btn-info btn-flat">Edit!</button></div></td>
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