<?php 
	session_start();
    include 'connectdb.php'; 

    echo "pst_name ".$pst=$_POST['pst'];
    echo "<br>";
    echo "pstname ".$pstname=$_POST['pstname'];

    $sql3="UPDATE tb_position set pst_name ='$pstname' where pst_name ='$pst' ";
    $query=mysqli_query($mysqli, $sql3);
  
    echo "<script>alert('Update Position Complete'); window.location.href='_all_organization_architecture.php';</script>";

    


?>