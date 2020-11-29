<?php 
 	include 'connect.php';
 if(isset($_REQUEST["pos1"])){
	$pos1 =$_REQUEST["pos1"];
	
 	//$sql2= "SELECT * FROM  tb_position WHERE pst_id = '$poid' "; 
 	$sql2= "SELECT * FROM  tb_user WHERE us_po = '$pos1' "; 
	
 	$result2 = mysqli_query($conn, $sql2); 
	echo"<option value='' selected disabled>-Select-</option>";
	while($row2 = mysqli_fetch_array($result2)) {
	echo"<option value='$row2[0]'>" .$row2["us_firstname"]." ".$row2["us_lastname"]." </option>";
	}
}
if(isset($_REQUEST["pos2"])){
	$pos2 =$_REQUEST["pos2"];
	
 	//$sql2= "SELECT * FROM  tb_position WHERE pst_id = '$poid' "; 
 	$sql2= "SELECT * FROM  tb_user WHERE us_po = '$pos2' "; 
	
 	$result2 = mysqli_query($conn, $sql2); 
	echo"<option value='' selected disabled>-Select-</option>";
	while($row2 = mysqli_fetch_array($result2)) {
	echo"<option value='$row2[0]'>" .$row2["us_firstname"]." ".$row2["us_lastname"]." </option>";
	}
}
if(isset($_REQUEST["pos3"])){
	$pos3 =$_REQUEST["pos3"];
	
 	//$sql2= "SELECT * FROM  tb_position WHERE pst_id = '$poid' "; 
 	$sql2= "SELECT * FROM  tb_user WHERE us_po = '$pos3' "; 
	
 	$result2 = mysqli_query($conn, $sql2); 
	echo"<option value='' selected disabled>-Select-</option>";
	while($row2 = mysqli_fetch_array($result2)) {
	echo"<option value='$row2[0]'>" .$row2["us_firstname"]." ".$row2["us_lastname"]." </option>";
	}
}

 ?>