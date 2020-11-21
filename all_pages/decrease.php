<?php

include 'connectdb.php';
	
// session_start();
// $member_token = $_SESSION['member_token'];
	
$result_decrease = mysqli_query($mysqli, "UPDATE tb_notification SET msg_status = 0 ");
$data = array(
	'badge_number' => 0
); 
echo json_encode($data);


?>