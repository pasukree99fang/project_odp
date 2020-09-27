<?php 
  session_start();
  ?>
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
  
<body>
  <!-- left column -->
  <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-info">
                    <div class="box-header ">
                        <h3>Profile</i>
          <a href="_edit_profile.php"> <button type="button" class="btn btn-info btn-flat pull-right"> Edit </button></a>
          <h2 class="page-header"></h2>
 
          <!-- Main content -->
          <!-- <small class="pull-right">Date: 2/10/2014</small> -->
      <!-- /.col -->
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-5 invoice-col">
         <div align="center"><img src="dist/img/doggy.jpg" class="user-image" alt="User Image" width='250px' height='300px' >
        </div>
      </div>
      <!-- /.col -->
      <div class="col-sm-5 invoice-col">
        <strong><h3> Profile </h3></strong>
          <h4>User : <?php echo $_SESSION['us_firstname']; ?> <?php echo $_SESSION['us_lastname']; ?></h4>
          <h4>Email : <?php echo $_SESSION['us_email'] ?></h4>
          <h4>Positon :  </h4>
          <h4>Department :  </h4>
          <h4>Sub-department :  </h4>
        <!-- DB to find manager-->
         <h4>Manager :  <?php echo  $_SESSION['us_manager_id'] ?> </h4>

</body>
</html>
      
     
      