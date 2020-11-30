<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 include 'connectdb.php';
 if ($_SESSION['us_username'] == null){
  echo "<script>alert('กรุณาเข้าสู่ระบบ'); window.location.href='../login.html';</script>";
 }
?>
<?php
  $strSQL = "SELECT doc_form_id FROM tb_document ";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>
<div class="row">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">All Document Template</h3>

              <!-- <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Document">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div> -->
            </div> 
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tr>
                    <th width="150"> <div align="center">Document Template </div></th>
                    <!-- <th width="150"> <div align="center">Edit Template</div></th> -->
                    <th width="150"> <div align="center">Delete Template</div></th>
                </tr>
                <?php
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                <tr>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["doc_form_id"];?></div></td>
                    <!-- <td><div align="center"><button type="submit" class="btn btn-info  btn-primary fa fa-pencil"> Edit!</button></div></td> -->
                    <td><div align="center"><a href="_manageall_document.php?eleid=<?php echo $objResult["doc_form_id"];?>"><button type="button" class="btn btn-info btn-danger fa fa-trash"> Delete!</button></a></div></td>
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