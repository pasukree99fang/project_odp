<?php include 'connectdb.php';?>
<?phpsession_start();?>
<?php
  $strSQL = "SELECT * FROM tb_user";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>

<div class="row">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ALL User</h3>

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
                    <th width="100"> <div align="center">Username </div></th>
                    <th width="150"> <div align="center">Name </div></th>
                    <th width="150"> <div align="center">Approval </div></th>
                    <th width="150"> <div align="center">Change </div></th>
                </tr> 
                <?php
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                <tr>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_username"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_firstname"];?> <?php echo $objResult["us_lastname"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["us_isapproval"];?></div></td>
                    <td><div align="center"><a href="_manageeditapproval.php?ususername=<?php echo $objResult["us_username"]; ?>"><button type="button" class="btn btn-info  btn-primary fa fa-pencil"> Edit!</button></a></div></td>
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

<!-- <a href="ชื่อไฟล์.php?sta=yes&uskey=<?php echo $objResult['us_username'];?>">yes</a>
<a href="ชื่อไฟล์.php?sta=no&uskey=<?php echo $objResult['us_username'];?>">no</a> -->