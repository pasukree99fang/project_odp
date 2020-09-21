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
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i><?php echo $objResult1['cpn_name'] ?>
          <!-- <small class="pull-right">Date: 2/10/2014</small> -->
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
      <table class="table table-hover table-striped">
                <tr>
                    <th width="20"> <div align="center"><img src="dist/img/doggy.jpg" class="user-image" alt="User Image" width='350px' height='400px' >
        </div></th>
                </tr>   
        </table>
      
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <strong><h3> Profile </h3></strong>
          <h4>User : <?php echo $_SESSION['us_firstname']; ?> <?php echo $_SESSION['us_lastname']; ?></h4>
          <h4>Email : <?php echo $_SESSION['us_email'] ?></h4>
          <h4>Positon :  </h4>
          <h4>Department :  </h4>
          <h4>Sub-department :  </h4>
        <!-- DB to find manager-->
         <h4>Manager :  <?php echo  $_SESSION['us_manager_id'] ?> </h4>
      
     
      