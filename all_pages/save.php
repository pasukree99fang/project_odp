<?php

include 'connectdb.php';
session_start();
	
$msg_text = $_POST['msg_text']; // รับข้อความจาก send.php
//$member_token = $_SESSION['member_token']; // ไอดีที่เป็นตัวกำหนดว่าจะแสดง badge ที่หน้าเว็บใคร
	
if(isset($msg_text) ){
   
    $result = mysqli_query($mysqli, "INSERT INTO tb_notification SET msg_text = '".$msg_text."',member_token = 2,msg_status = 1");
}
header('Location: send.php');

?> 