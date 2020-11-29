<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>2YOU</title>
  <?php include '_plugin.php'; 
        include 'connectdb.php';?>
</head>
<!-- DB for profile get cpn_name -->
<?php
 $SQL1 = "SELECT cpn_name FROM tb_company join tb_user on tb_company.cpn_id = tb_user.us_company_id"; 
	$objQuery1 = mysqli_query($mysqli,$SQL1);
  $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);  ?>
 
 <!-- DB1 tb_position -->
 <?php $SQL1 = "SELECT a.us_id, a.us_username, a.us_firstname, 
                b.afft_id, b.afft_user_id, b.afft_sub_department_id,
                c.pst_id,c.pst_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_affiliation) b ON (a.us_id=b.afft_user_id) 
                LEFT OUTER JOIN (SELECT * FROM tb_position) c ON (b.afft_position_id=c.pst_id)
                WHERE us_username = '".$_SESSION['us_username']."'";
                $objQuery1 = mysqli_query($mysqli,$SQL1);
                $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC); ?>
                
                <!-- DB2 tb_department -->
                <?php $SQL2 = "SELECT a.us_id, a.us_username, a.us_firstname, 
                b.afft_id, b.afft_user_id, b.afft_sub_department_id,
                c.dpm_id,c.dpm_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_affiliation) b ON (a.us_id=b.afft_user_id) 
                LEFT OUTER JOIN (SELECT * FROM tb_department) c ON (b.afft_department_id=c.dpm_id)
                WHERE us_username = '".$_SESSION['us_username']."'";
                $objQuery2 = mysqli_query($mysqli,$SQL2);
                $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC); ?> 

                <!-- DB3 tb_sub_department -->
                <?php $SQL3 = "SELECT a.us_id, a.us_username, a.us_firstname, 
                b.afft_id, b.afft_user_id, b.afft_sub_department_id,
                c.sub_id,c.sub_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_affiliation) b ON (a.us_id=b.afft_user_id) 
                LEFT OUTER JOIN (SELECT * FROM tb_sub_department) c ON (b.afft_sub_department_id=c.sub_id)
                WHERE us_username = '".$_SESSION['us_username']."'";
                $objQuery3 = mysqli_query($mysqli,$SQL3);
                $objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC); ?> 
               
<body>
<!--<div class="wrapper">--> 
  <!-- Main content -->
  <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-info">
            <div class="box-header with-border">    <!-- title row -->
            <strong><h3> Profile </h3></strong>
          <!-- <small class="pull-right">Date: 2/10/2014</small> -->
    </div>
    <br>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-5 invoice-col">
    <!-- <form action="_manage_profile.php" > -->
        <div align="center"><img src="dist/img/doggy.jpg" class="user-image pull-center" alt="User Image" width='250px' height='300px' > 
        <br></br>
        <!-- <button type="submit" class="btn btn-info btn-flat pull-center" > Upload photo</a></button> -->
        <button id="myBtn" class="btn btn-info btn-flat pull-center" >Upload photo</button>
</div>
</div>
        <!-- </form> -->
      <!-- /.col -->
<div class="col-sm-5 invoice-col">
<br>

<!--ลองเขียน-->
<!--  $usersession =$_SESSION['us_username'] 
$sql = mysqli_query("SELECT * from tb_user where us_username='".$usersession."' ");
$row = $mysqli_fetch_assoc($sql);
?> -->
        <form action="_manage_profile.php" method="POST" >
           <!-- <h4> <label>User</label> -->
           <br><label>Username</label> 
        <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo  $_SESSION['us_username'] ?>" disabled>
        <label>Firstname</label>   
        <input type="text" class="form-control" id="inputfname" name="inputfname" placeholder="<?php echo $_SESSION['us_firstname']; ?>" >
        <label>Lastname</label>     
        <input type="text"  class="form-control" id="inputlname" name="inputlname" placeholder="<?php echo $_SESSION['us_lastname']; ?>" >
           <br> <label>Email</label> 
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="<?php echo $_SESSION['us_email'] ?>" >
        <br><label>Position</label> 
        <input type="text" class="form-control" id="Position" name="Position"placeholder="<?php echo $objResult1['pst_name'] ?>" disabled >
        <br><label>Department</label> 
        <input type="text" class="form-control" id="Department" name="Department" placeholder="<?php echo $objResult2['dpm_name'] ?>" disabled >
        <br><label>Sub-department</label> 
        <input type="text" class="form-control" id="SubDepartment" name="SubDepartment" placeholder="<?php echo $objResult3['sub_name'] ?>" disabled >
        <br><label>Manager</label> 
        <input type="text" class="form-control" id="Manager" name="Manager" placeholder="<?php echo  $_SESSION['us_manager_id'] ?>" disabled >
        

</h4><br>

<button type="reset" class="btn btn-info btn-flat pull-right">Cancel </button>
<button type="submit" name="save profile" class="btn btn-info btn-flat pull-right"> Save &nbsp;</button>  &nbsp;&nbsp;&nbsp;
    

</form>
</div>
</div>
</div>

<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    <div class="frame">
	<div class="center">
		<div class="title">
			<h1>Drop file to upload</h1>
		</div>
		<diva class="dropzone">
			<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
			<input type="file" class="upload-input" />
		</div>
		<button type="button" class="button" name="uploadbutton">Upload Photo</button>
        </div>
        </div>
    </div>
    </div>
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

</body>
</html>
      
     
      