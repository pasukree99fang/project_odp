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
    //$usapp=$_REQUEST['usapp'];
    $ususername=$_REQUEST['ususername'];

    $sql="SELECT us_username,us_isapproval FROM tb_user WHERE us_username = '$ususername'";
    $query=mysqli_query($mysqli, $sql);
    $fetch = mysqli_fetch_array($query,MYSQLI_ASSOC);
    //echo $fetch['us_username']."<br>";
    //echo $fetch['us_isapproval'];
    
    if($fetch['us_isapproval']=='yes'){
        $sta='no';
    }
    if($fetch['us_isapproval']=='Yes'){
        $sta='no';
    }
    if($fetch['us_isapproval']=='No'){
        $sta='yes';
    }
    if($fetch['us_isapproval']=='no'){
        $sta='yes';
    }

    $sql1="UPDATE tb_user SET us_isapproval = '$sta' WHERE us_username = '$ususername'";
    //echo $sql1;
    $query1=mysqli_query($mysqli, $sql1);
    //alert('Edit sta Complete'); 
    echo "<script>window.location.href='_edit_approval.php';</script>";
 ?>