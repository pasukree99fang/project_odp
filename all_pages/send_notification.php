<?php
include 'connectdb.php';

function sendNotification ($userId, $message) {
    $result = mysqli_query('
    $mysqli', "INSERT INTO tb_notification 
    SET msg_text = '".$message."' ,noti_user_id_receiver = '".$userId."',msg_status = 1");
}
























