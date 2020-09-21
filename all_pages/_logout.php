<?php
	session_start();
	unset($_SESSION['us_username']);
	session_destroy();
  header("location:../login.html");
?>