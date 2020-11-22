<?php

function sendNotification ($bossData, $message) {
    $mysqli = new mysqli("localhost","root","","odp");
    $result = mysqli_query($mysqli, "INSERT INTO tb_notification 
    SET noti_user_id_receiver = '".$bossData."',msg_text = '".$message."' ,msg_status = 1");
}
?>