<?php 
	session_start();
    include 'connectdb.php'; 

    echo "sub_name ".$sub=$_POST['sub'];
    echo "<br>";
    echo "subname ".$subname=$_POST['subname'];
    
    $sql2="UPDATE tb_sub_department set sub_name ='$subname' where sub_name ='$sub' ";
	$query=mysqli_query($mysqli, $sql2);
  
    echo "<script>alert('Update sub department Complete'); window.location.href='_all_organization_architecture.php';</script>";

    


?>