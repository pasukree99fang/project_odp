<?php

include 'connectdb.php';
session_start();
require_once 'send_notification.php';
require_once '../PHPMailer-master/vendor/autoload.php';
$user_id = $_SESSION['us_id'];
// --------------
$bossUsername = mysqli_query($mysqli,
    "SELECT us_manager_id FROM tb_user WHERE user_id = ".$user_id);
// --------------------------
$bossData = mysqli_query($mysqli,
    "SELECT user_id,email FROM tb_user WHERE user_id = ".$bossUsername);

$message = 'สวัสดี';

sendNotification($bossData['user_id'], $message);
//$email_message = 'ว้าวซ่า';
//send($bossData['user_id'], $email_message);


	/*
$msg_text = $_POST['msg_text']; // รับข้อความจาก send.php
$user_id = $_POST['user_id']; // รับ user id จาก send.php

$result = mysqli_query($mysqli, "INSERT INTO tb_notification 
    SET msg_text = '".$msg_text."' ,noti_user_id = '".$user_id."',msg_status = 1");


header('Location: send.php');
    */
    
    





