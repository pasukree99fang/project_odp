<?php
	session_start();
	include 'connectdb.php';
	if ($_SESSION['us_username'] == null)
	 echo "<script>alert('กรุณาเข้าสู่ระบบ'); window.location.href='../login.html';</script>";
	
?>