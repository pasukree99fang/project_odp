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
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Calendar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>