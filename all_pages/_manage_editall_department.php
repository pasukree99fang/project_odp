<?php 
	session_start();
    include 'connectdb.php'; 

    echo "dpm ".$dpm=$_POST['dpm'];
    echo "<br>";
    echo "dpmname ".$dpmname=$_POST['dpmname'];

    $sql="UPDATE tb_department set dpm_name ='$dpmname' where dpm_name ='$dpm' ";
    $query=mysqli_query($mysqli, $sql);
  
    echo "<script>alert('Update Department Complete'); window.location.href='_all_organization_architecture.php';</script>";

    


?>