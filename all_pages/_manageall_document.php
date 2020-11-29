<?php 
	session_start();
    include 'connectdb.php'; 

    $eleid=$_REQUEST['eleid'];
    echo "<br>";
    $sql1="DELETE FROM tb_document WHERE doc_form_id='$eleid'";
    $query=mysqli_query($mysqli, $sql1);
	echo "<br>";
    $sql2="DELETE FROM tb_status_send WHERE ss_docname='$eleid'";
    $query2=mysqli_query($mysqli, $sql2);

  
    echo "<script>alert('Delete Form Complete'); window.location.href='_alldocument.php';</script>";

    
    
?>