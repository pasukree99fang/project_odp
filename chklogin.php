 <?php 
session_start();
include 'connectdb.php';
if (isset($_POST['user']) && $_POST['user'] != ""
	&& isset($_POST['pass']) && $_POST['pass'] != "") {

	$SQL = "SELECT * FROM tb_user WHERE us_username = '".$_POST['user']."'
	and us_password = '".$_POST['pass']."'"; 
	$objQuery = mysqli_query($mysqli,$SQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	$_SESSION['us_username']=$objResult['us_username'];
		$_SESSION['us_password']=$objResult['us_password'];
		$_SESSION['us_firstname']=$objResult['us_firstname'];
		$_SESSION['us_lastname']=$objResult['us_lastname'];
		$_SESSION['us_email']=$objResult['us_email'];
		$_SESSION['us_password_approve']=$objResult['us_password_approve'];
		$_SESSION['us_manager_id']=$objResult['us_manager_id'];
		$_SESSION['us_isadmin']=$objResult['us_isadmin'];
		$_SESSION['us_isapproval']=$objResult['us_isapproval'];
		$_SESSION['us_company_id']=$objResult['us_company_id'];


	if ($_POST['user'] != $objResult['us_username'] && $_POST['pass'] != $objResult['us_password']) {
		echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'); window.location.href='login.html';</script>";
		
	}
	else if ($_POST['user'] == $objResult['us_username'] && $_POST['pass'] == $objResult['us_password']) {
		echo "<script>alert('ยินดีต้อนรับ ".$objResult['us_firstname']." ".$objResult['us_lastname']."'); window.location.href='all_pages/_home.php';</script>";
		
	}

}else{
	echo "<script>alert('กรุณากรอกข้อมูลให้ครบ'); window.location.href='login.html';</script>";
}







// echo "USER : ".$_POST['user']."<br>";
// echo "PASSWORD : ".$_POST['pass']."<br>";

// if($_POST['user'] == 'pasukree' && $_POST['pass'] == 'pasukree99'){
// 	echo "OK<br>";
// 	if ($_POST['user'] == 'pasukree') {
// 		echo "Status : Admin";
// 	}
// }else{
// 	echo "!!!!!!!!!!!!!!!!";
// }
?> 