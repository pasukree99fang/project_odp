<?php 
	session_start();
    include 'connectdb.php'; 

    echo $eleid=$_REQUEST['eleid'];
    $sql1="DELETE FROM tb_form_element WHERE ele_id='$eleid'";

    $query=mysqli_query($mysqli, $sql1);
  
    echo "<script>alert('Delete Form Complete'); window.location.href='_alldocument.php';</script>";

    
    
?>