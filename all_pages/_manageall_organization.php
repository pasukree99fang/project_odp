<?php 
	session_start();
    include 'connectdb.php'; 

    $strSQL1 = "SELECT * FROM tb_department";
    $objQuery1 = mysqli_query($mysqli,$strSQL1);

    $strSQL2 = "SELECT * FROM tb_sub_department";
    $objQuery2 = mysqli_query($mysqli,$strSQL2);

    $strSQL3 = "SELECT * FROM tb_position";
    $objQuery3 = mysqli_query($mysqli,$strSQL3);

    $dpmid_delete=$_REQUEST['dpmid_delete'];
    $subid_delete=$_REQUEST['subid_delete'];
    $pstid_delete=$_REQUEST['pstid_delete'];

    $sql1="DELETE FROM tb_department WHERE dpm_id='$dpmid_delete'";
    $query=mysqli_query($mysqli, $sql1);
    
    $sql2="DELETE FROM tb_sub_department WHERE sub_id='$subid_delete'";
    $query=mysqli_query($mysqli, $sql2);
    
    $sql3="DELETE FROM tb_position WHERE pst_id='$pstid_delete'";
	$query=mysqli_query($mysqli, $sql3);
  
    echo "<script>alert('Delete Complete'); window.location.href='_all_organization_architecture.php';</script>";

    
    
?>