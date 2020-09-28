<?php 
	session_start();
    include 'connectdb.php'; 

    echo "username ".$username=$_POST['username'];
    echo "<br>";
    echo "upusername ".$upusername=$_POST['upusername'];

    echo "firstname ".$firstname=$_POST['firstname'];
    echo "<br>";
    echo "upfirstname ".$upfirstname=$_POST['upfirstname'];

    echo "lastname ".$lastname=$_POST['lastname'];
    echo "<br>";
    echo "uplastname ".$uplastname=$_POST['uplastname'];

    echo "email ".$email=$_POST['email'];
    echo "<br>";
    echo "upemail ".$upemail=$_POST['upemail'];
    
    $sql1="UPDATE tb_user set us_username ='$upusername' where us_username ='$username' ";
    $query1=mysqli_query($mysqli, $sql1);
    
    $sql2="UPDATE tb_user set us_firstname ='$upfirstname' where us_firstname ='$firstname' ";
    $query2=mysqli_query($mysqli, $sql2);
    
    $sql3="UPDATE tb_user set us_lastname ='$uplastname' where us_lastname ='$lastname' ";
    $query3=mysqli_query($mysqli, $sql3);
    
    $sql4="UPDATE tb_user set us_email ='$upemail' where us_email ='$email' ";
    $query4=mysqli_query($mysqli, $sql4);
  
    echo "<script>alert('Update sub department Complete'); window.location.href='_alluser.php';</script>";

    


?>