<?php session_start();
 	include 'connectdb.php'; 
	$usname=$_SESSION['us_username'];
	$eleid=$_REQUEST['eleid'];
	$date_create=Date("d/m/Y h:i");
	$sql="INSERT INTO tb_document (doc_date_time,doc_form_id,doc_user_id) VALUES ('$date_create','$eleid','$usname')";
    $query=mysqli_query($mysqli, $sql);
	echo "<script>alert('Send Complete'); window.location.href='_document.php';</script>";

?>