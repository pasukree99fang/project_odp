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
  $strSQL = "SELECT doc_id,doc_form_id FROM tb_document ";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>

<div class="row">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Document</h3>

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
                    <th width="100"> <div align="center">Files ID </div></th>
                    <th width="150"> <div align="center">Document Template </div></th>
                    <th width="150"> <div align="center">Use Template </div></th>
                </tr>
                <?php $i=1;
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                <tr>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["doc_id"];?></div></td>
                    <td class="mailbox-name"><div align="center"><?php echo $objResult["doc_form_id"];?></div></td>
                    <td>
                      <div align="center">
                        <!-- <a href="__cdoc_preview.php?docform=<?php echo $objResult["doc_form_id"];?>" class="btn btn-info  btn-primary fa fa-print" target="_blank"> Use Template!</a> -->
                        <a href="___test_preview.php?docform=<?php echo $objResult["doc_form_id"];?>" class="btn btn-info  btn-primary fa fa-print" target="_blank"> Use Template!</a>
                      </div>
                    </td>
                </tr>
                <?php $i++;} ?> 
              </table>
              </div>
            </div>
          </div>
        </div>
        <!-- ปุ่ม suceees -->
        <!-- http://localhost/AdminLTE/pages/UI/modals.html -->
</div>
  <?php
    mysqli_close($mysqli);
  ?>