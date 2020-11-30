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
	session_start();
    include 'connectdb.php'; 

    if(isset($_REQUEST['dpmid_delete'])){
        $dpmid_delete=$_REQUEST['dpmid_delete'];
        $sql1="DELETE FROM tb_department WHERE dpm_id='$dpmid_delete'";
    $query=mysqli_query($mysqli, $sql1);
    }
    if(isset($_REQUEST['subid_delete'])){
        $subid_delete=$_REQUEST['subid_delete'];
        $sql2="DELETE FROM tb_sub_department WHERE sub_id='$subid_delete'";
    $query=mysqli_query($mysqli, $sql2);
    }
    if(isset($_REQUEST['pstid_delete'])){
        $pstid_delete=$_REQUEST['pstid_delete'];
        $sql3="DELETE FROM tb_position WHERE pst_id='$pstid_delete'";
    $query=mysqli_query($mysqli, $sql3);
    }
    
    
    
    
    
    
  
    echo "<script>alert('Delete Complete'); window.location.href='_all_organization_architecture.php';</script>";

    
    
?>