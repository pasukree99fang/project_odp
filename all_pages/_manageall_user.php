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

    echo $usernamedelete=$_REQUEST['usname'];

    $sql1="DELETE FROM tb_user WHERE us_username='$usernamedelete'";
    $query=mysqli_query($mysqli, $sql1);
    
    // $sql2="DELETE FROM tb_sub_department WHERE sub_id='$subid_delete'";
    // $query=mysqli_query($mysqli, $sql2);
    
    // $sql3="DELETE FROM tb_position WHERE pst_id='$pstid_delete'";
	// $query=mysqli_query($mysqli, $sql3);
  
    echo "<script>alert('Delete User Complete'); window.location.href='_alluser.php';</script>";
?>