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
include '_session_login.php';
include 'connectdb.php';
?>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script>
      $(document).ready(function(){
        $("#pos1").change(function(){
        
          $.ajax({
          url: "select_position.php",
          data: "pos1=" + $("#pos1").val(),
          type: "POST",
          async:false,
          success: function(data, status) {
              $("#user").html(data);
        
            },
      
          error: function(xhr, status, exception) { alert(status); }
      
          });
        });
    $("#pos2").change(function(){
        
    $.ajax({
    url: "select_position.php",
    data: "pos2=" + $("#pos2").val(),
    type: "POST",
    async:false,
    success: function(data, status) {
        $("#user2").html(data);
        
      },
      
    error: function(xhr, status, exception) { alert(status); }
      
    });
    });
    $("#pos3").change(function(){
        
    $.ajax({
    url: "select_position.php",
    data: "pos3=" + $("#pos3").val(),
    type: "POST",
    async:false,
    success: function(data, status) {
        $("#user3").html(data);
        
      },
      
    error: function(xhr, status, exception) { alert(status); }
      
    });
    });
    });
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '_menu.php'; ?>
    <div class="content-wrapper"> 
<section class="content">
  <div class="row">
    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-9">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Document</h3>
        </div>
        <div class="box-body">
        <form role="form" action="__cdocfix_manage.php" method="POST" enctype="multipart/form-data" >
          <div class="row">
            <div class="col-md-6">
              <div class="form-group ">
                <label>Document Title </label>
                <input type="text" class="form-control" id="dtitle" name="dtitle" placeholder="Enter Document title">
              </div>
            </div>
          </div>
          <div class="row">
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
          </div>
          <div class="row">
            <div class="col-md-4" id="po_lv1" style="display:none">
              <div class="form-group">
                <label>Position - Level 1</label>
                <?php
                  $strSQL = "SELECT * FROM tb_position";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                ?>
                <select class="form-control select2" style="width: 100%;" id="pos1" name="pos1">
                  <option selected="selected" selected disabled>Choose Position</option>
                  <?php
                    while($row = mysqli_fetch_array($objQuery))
                    {
                        echo"<option value='$row[0]'>".$row["pst_name"]."</option>";
                    } ?>
                </select>
              </div>
            </div>
            <div class="col-md-4" id="po_lv2" style="display:none">
              <div class="form-group">
                <label>Position - Level 2</label>
                <?php
                  $strSQL = "SELECT * FROM tb_position";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                ?>
                <select class="form-control select2" style="width: 100%;" id="pos2" name="pos2">
                  <option selected="selected" selected disabled>Choose Position</option>
                  <?php
                    while($row1 = mysqli_fetch_array($objQuery))
                    { 
                  echo"<option value='$row1[0]'>".$row1["pst_name"]."</option>";
                   } ?>
                </select>
              </div>
            </div>
            <div class="col-md-4" id="po_lv3" style="display:none">
              <div class="form-group">
                <label>Position - Level 3</label>
                <?php
                  $strSQL = "SELECT * FROM tb_position";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                ?>
                <select class="form-control select2" style="width: 100%;" id="pos3" name="pos3">
                  <option selected="selected" selected disabled>Choose Position</option>
                  <?php
                    while($row2 = mysqli_fetch_array($objQuery))
                    {
                  echo"<option value='$row2[0]'>".$row2["pst_name"]."</option>";
                  } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" id="us_lv1" style="display:none">
              <div class="form-group">
                <label>Name - Level 1</label>
                <select id='user' name='user' class='form-control'>
                <option value='' selected disabled>-Select-</option>
                </select>
              </div>
            </div>
            <div class="col-md-4" id="us_lv2" style="display:none">
              <div class="form-group">
                <label>Name - Level 1</label>
                <select id='user2' name='user2' class='form-control'>
                <option value='' selected disabled>-Select-</option>
                </select>
              </div>
            </div>
            <div class="col-md-4" id="us_lv3" style="display:none">
              <div class="form-group">
                <label>Name - Level 1</label>
                <select id='user3' name='user3' class='form-control'>
                <option value='' selected disabled>-Select-</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 table-responsive">
              <table class="table" id="cdoc"></table>
            </div>
            <div class="col-md-7"></div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right fa fa-download"> Save</button> 
        </div>
      </form>
      </div>
    </div>
    <div class="col-md-3">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Tools Document</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-app" type="button" id="addcdl" name="addcdl">
                <i class="fa fa-text-width"></i> 
                <label>Label</label>
              </button>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-app" type="button" id="addcd" name="addcd">
                <i class="fa fa-text-width"></i> 
                <label>Text</label>
              </button>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addcda" id="addcda">
                <i class="fa fa-comments"></i> 
                <label>Textarea</label>
              </a>
            </div>
          </div>
          <!-- <br /> -->
          <!-- <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addfileupload" id="addfileupload">
                <i class="fa fa-upload"></i> 
                <label>File upload </label>
              </a>
            </div>
          </div> -->
          <br />
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addcheckbox" id="addcheckbox">
                <i class="fa fa-check-square"></i> 
                <label>Checkbox</label>
              </a>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addradio" id="addradio">
                <i class="fa fa-dot-circle-o"></i> 
                <label>Radio Button</label>
              </a>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
                <label>Label = ชื่อหัวข้อ</label>
                <label>Text = ช่องสำหรับ User (เล็ก)</label>
                <label>Testarea = ช่องสำหรับ User (ใหญ่)</label>
            </div>
          </div>
          <br />
        </div>
      </div>
    </div>
    <!-- <div class="col-md-1"></div> -->
  </div>
</section>
    </div>

    <?php include '_footer.php'; ?>
    <div class="control-sidebar-bg"></div>

  </div>
  <?php include '_script.php'; ?>
  <script>
$(document).ready(function(){
    var i=0;
    $('#addcdl').click(function(){
        i++;
        //i+=i;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;"><input type="text" name="labeltext[]" class="form-control" placeholder="ชื่อหัวข้อ" /><input type="hidden" name="labeltextx[]" class="form-control" value="label,'+i+'" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
        //i+=i;
    });

    $('#addcd').click(function(){
        i++;
        //i+=i;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;"><input type="text" name="inputtext[]" class="form-control" placeholder="Enter" /><input type="hidden" name="inputtextx[]" class="form-control" value="input,'+i+'" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    $('#addcda').click(function(){
        i++;
        //i+=i;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;"><textarea type="text" name="textarea[]" rows="4" cols="50" class="form-control" placeholder="Enter"></textarea><input type="hidden" name="textareax[]" class="form-control" value="textarea,'+i+'" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    // $('#addfileupload').click(function(){
    //     i++;
    //     $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;"><input type="file" name="files[]" rows="4" cols="50" class="form-control"><input type="hidden" name="filex[]" class="form-control" value="file,'+i+'" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    // });

    $('#addcheckbox').click(function(){
        i++;
        //i+=i;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;"><input type="checkbox" id="chkbox" name="chkbox[]">&nbsp&nbsp&nbsp&nbsp&nbsp<label for="chkbox"><input type="text" name="chkbox[]" class="form-control" placeholder="Enter"><input type="hidden" name="chkboxx[]" class="form-control" value="checkbox,'+i+'"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    $('#addradio').click(function(){
        i++;
        //i+=i;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;"><input type="radio" id="rao" name="rao[]" checked>&nbsp&nbsp&nbsp&nbsp&nbsp<label for="rao"><input type="text" name="radios[]" class="form-control" placeholder="Enter"><input type="hidden" name="radiox[]" class="form-control" value="radio,'+i+'"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
        $('#'+button_id+'').remove();
    });
});
</script>
<script src="jquery-3.2.1.min.js"></script>
  <script language="javascript">
    $("#stepnum").change(function(){
      var polvl = $("#stepnum option:selected").val();
      if(polvl=='1'){
        $("#po_lv1").css("display","block");
        $("#po_lv2").css("display","none");
        $("#po_lv3").css("display","none");
        $("#us_lv1").css("display","block");
        $("#us_lv2").css("display","none");
        $("#us_lv3").css("display","none");
      }
      if(polvl=='2'){
        $("#po_lv1").css("display","block");
        $("#po_lv2").css("display","block");
        $("#po_lv3").css("display","none");
        $("#us_lv1").css("display","block");
        $("#us_lv2").css("display","block");
        $("#us_lv3").css("display","none");
      }
      if(polvl=='3'){
        $("#po_lv1").css("display","block");
        $("#po_lv2").css("display","block");
        $("#po_lv3").css("display","block");
        $("#us_lv1").css("display","block");
        $("#us_lv2").css("display","block");
        $("#us_lv3").css("display","block");
      }
      //console.log(gv);
      //console.log(gv_kawa);
    });
</script>
</body>
</html>