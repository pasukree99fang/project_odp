<?php
include 'connectdb.php';
function sendNotification ($userId, $message) {
    $result = mysqli_query('$mysqli', "INSERT INTO tb_notification 
    SET noti_user_id = '".$userId."' ,msg_text = '".$message."' ,msg_status = 1");
}

//header('Location: send.php');



