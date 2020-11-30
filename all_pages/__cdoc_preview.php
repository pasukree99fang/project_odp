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
<?php //include '_session_login.php' 
include 'connectdb.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>2YOU</title>
  <?php include '_plugin.php'; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '_menu.php'; ?>
    <div class="content-wrapper"> 
<section class="content">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
      <div class="box box-info">
        <div class="box-header with-border">
          <h2 class="box-title">Document</h2>
        </div>
        <div class="box-body">
        <form role="form" action="_send_document.php" method="POST" enctype="multipart/form-data" >
          <div class="row">
            <div class="col-md-6">
              <?php
                  $form=$_REQUEST['docform'];
                  $strSQL = "SELECT distinct doc_title FROM create_doc_table where doc_title='$form'";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  $row = mysqli_fetch_array($objQuery);
                ?>
              <div class="form-group">
                <label><?php echo $row['doc_title']; ?></label>
                <input type="text" name="docform" value="<?php echo $row['doc_title']; ?>">
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Step number of approval</label>
                <select class="form-control select2" style="width: 100%;" name="stepnum" id="stepnum">
                  <option selected="selected" selected disabled>Choose Number</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group" id="po_lv1" style="display:none">
                <label>Position</label>
                <?php
                  $strSQL = "SELECT * FROM tb_position";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                ?>
                <select class="form-control select2" style="width: 100%;" name="pos1">
                  <option selected="selected">Choose Position</option>
                  <?php
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                  <option value="<?php echo $objResult['pst_id'] ?>"><?php echo $objResult['pst_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group" id="po_lv2" style="display:none">
                <label>Position</label>
                <?php
                  $strSQL = "SELECT * FROM tb_position";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                ?>
                <select class="form-control select2" style="width: 100%;" name="pos2">
                  <option selected="selected">Choose Position</option>
                  <?php
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                  <option value="<?php echo $objResult['pst_id'] ?>"><?php echo $objResult['pst_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group" id="po_lv3" style="display:none">
                <label>Position</label>
                <?php
                  $strSQL = "SELECT * FROM tb_position";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                ?>
                <select class="form-control select2" style="width: 100%;" name="pos3">
                  <option selected="selected">Choose Position</option>
                  <?php
                    while($objResult = mysqli_fetch_array($objQuery))
                    { ?>
                  <option value="<?php echo $objResult['pst_id'] ?>"><?php echo $objResult['pst_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5"><!-- table-responsive -->
              <div class="form-group ">
              <?php
                  $strSQL = "SELECT * FROM create_doc_table where doc_title='$form' order by tag_no asc";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                ?>
              <table>
            <?php 
            while($row = mysqli_fetch_array($objQuery)){ 

              ?>
                <?php if($row['tag_type']=='label'){ ?>
                <tr>
                  <td>
                    <label><?php echo $row['text_title']; ?></label>
                  </td>
                </tr>
                <?php } ?>
                <?php if($row['tag_type']=='input'){ ?>
                <tr>
                  <td>
                    <input type="text" class="form-control" name="<?php echo $row['tag_type_name']; ?>" placeholder="Enter Detail">
                  </td>
                </tr>
                <?php } ?>
                <?php if($row['tag_type']=='textarea'){ ?>
                <tr>
                  <td>
                    <textarea type="text" name="<?php echo $row['tag_type_name']; ?>" rows="4" cols="50" class="form-control"></textarea><br>
                  </td>
                </tr>
                <?php } ?>
                <?php if($row['tag_type']=='file'){ ?>
                <tr>
                  <td>
                    <input type="file" name="<?php echo $row['tag_type_name']; ?>" rows="4" cols="50" class="form-control"><br>
                  </td>
                </tr>
                <?php } ?>
                <?php if($row['tag_type']=='radio'){ ?>
                <tr>
                  <td>
                    <input type="radio" id="rao" name="<?php echo $row['tag_type_name']; ?>">&nbsp&nbsp&nbsp&nbsp&nbsp
                    <label for="rao"><?php echo $row['text_title']; ?></label>
                  </td>
                </tr>
                <?php } ?>
                <?php if($row['tag_type']=='checkbox'){ ?>
                <tr>
                  <td>
                    <input type="checkbox" id="chkbox" name="<?php echo $row['tag_type_name']; ?>">&nbsp&nbsp&nbsp&nbsp&nbsp
                    <label for="chkbox"><?php echo $row['text_title']; ?></label>
                  </td>
                </tr>
                <?php } ?>
            <?php } ?>
              </table>
            </div>
            </div>
            <div class="col-md-7"></div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right fa fa-download"> Send</button> 
        </div>
      </form>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</section>
    </div>

    <?php include '_footer.php'; ?>
    <div class="control-sidebar-bg"></div>

  </div>
  <?php include '_script.php'; ?>
  <script src="jquery-3.2.1.min.js"></script>
  <script language="javascript">
    $("#stepnum").change(function(){
      var polvl = $("#stepnum option:selected").val();
      if(polvl=='1'){
        $("#po_lv1").css("display","block");
        $("#po_lv2").css("display","none");
        $("#po_lv3").css("display","none");
      }
      if(polvl=='2'){
        $("#po_lv1").css("display","block");
        $("#po_lv2").css("display","block");
        $("#po_lv3").css("display","none");
      }
      if(polvl=='3'){
        $("#po_lv1").css("display","block");
        $("#po_lv2").css("display","block");
        $("#po_lv3").css("display","block");
      }
      //console.log(gv);
      //console.log(gv_kawa);
    });
</script>
</body>
</html>