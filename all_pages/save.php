<?php

include 'connectdb.php';
session_start();
 require_once 'send_notification.php';
 require_once '../PHPMailer-master/send.php';
 $user_id = $_SESSION['us_id'];
 //echo 'user id'.$user_id;
 // --------------หา boss คือใคร
 $result = mysqli_query($mysqli,
     "SELECT us_manager_id FROM tb_user WHERE us_id = ".$user_id);
     $bossUsername = mysqli_fetch_assoc($result);
     //print_r($bossUsername) ;
 // --------------หา id boss (bossdata = array มีข้อมูล user_is and e mail จะต้องเรียกใช้ array ให้ถูกจุด)
    //echo $bossUsername['us_manager_id'];
 $result = mysqli_query($mysqli,
     "SELECT us_id,us_email FROM tb_user WHERE us_username = '".$bossUsername['us_manager_id']."'");
     $bossData = mysqli_fetch_assoc($result);
     if (!$bossData) {
        echo("Error description: " . mysqli_error($mysqli));
    }
     print_r($bossData);
     //echo $bossData['us_id']

//กำหนด message
$message = 'สวัสดี';

sendNotification($bossData['us_id'], $message);

//กำหนด email 
/*$email_message = 'odp';
$title = 'online doc';
sendEmail($bossData['us_email'],$title, $email_message);*/

/*$user_id=$_POST['user_id'];
$msg_text=$_POST['msg_text'];

$sql1="INSERT INTO tb_notification (noti_user_id_receiver, msg_text, msg_status) 
VALUES ('$user_id','$msg_text','1')";
$query=mysqli_query($mysqli, $sql1);

echo "<script>alert('Save Data Complete'); window.location.href='_createuser.php';</script>"; */

/*$msg_text = $_POST['msg_text']; // รับข้อความจาก send.php
$user_id = $_POST['user_id']; // รับ user id จาก send.php

$result = mysqli_query($mysqli, "INSERT INTO tb_notification 
    SET msg_text = '".$msg_text."' ,noti_user_id = '".$user_id."',msg_status = 1");

header('Location: send.php');
	
include 'connectdb.php';
session_start();
	
$msg_text = $_POST['msg_text']; // รับข้อความจาก send.php
$user_id = $_SESSION['us_id']; // รับ user id จาก send.php

$result = mysqli_query($mysqli, "INSERT INTO tb_notification 
    SET msg_text = '".$msg_text."' ,noti_user_id_receiver = '".$user_id."',msg_status = 1");

header('Location: send.php');*/
?>