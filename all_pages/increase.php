<?php
include 'connectdb.php';
	
// session_start();
//$member_token = $_SESSION['member_token'];
	
$result_increase = mysqli_query($mysqli, "SELECT * FROM tb_notification WHERE noti_user_id_receiver AND msg_status = 1");
$badge_number = mysqli_num_rows($result_increase);
$data = array(
	'badge_number' => $badge_number
); 
echo json_encode($data);
?>