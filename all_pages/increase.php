<?php
include 'connectdb.php';
	
// session_start();
//$member_token = $_SESSION['member_token'];
	
$result_increase = mysqli_query($mysqli, "SELECT member_token FROM tb_notification WHERE member_token = 2 AND msg_status = 1");
$badge_number = mysqli_num_rows($result_increase);
$data = array(
	'badge_number' => $badge_number
);
echo json_encode($data);
?>