<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 include 'connectdb.php';
 if ($_SESSION['us_username'] == null){
  echo "<script>alert('กรุณาเข้าสู่ระบบ'); window.location.href='../login.html';</script>";
 }
?>
<?php 
session_start(); 
include 'connectdb.php';
//echo $form=$_REQUEST['doc_name']; 
$form=$_REQUEST['doc_name']; 
//echo "<br>";
//echo $_POST['chkdoc'];

//echo "<br>";
//echo $_POST['usid'];
	$sql="select * from tb_status_send where ss_docname_id like '$form'";
	$res = mysqli_query($mysqli,$sql);
	$fetch = mysqli_fetch_array($res);
	if ($fetch['doc_lv1']==$_POST['usid']) {
		if($_POST['chkdoc']=='yes'){
	$chkdoc='approved';
}else if($_POST['chkdoc']=='no'){
	$chkdoc='noapproved';
}
		//echo "lvl1<br>";
		//echo "lvl1 ".$_POST['usid'];
		//echo "<br>";
		//echo $fetch['doc_aprlv1'];
		//echo "<br>sssss";
		$sqlu="UPDATE tb_status_send
				SET doc_aprlv1 = '$chkdoc'
				WHERE ss_docname_id like '$form'";
		$res = mysqli_query($mysqli,$sqlu);
				//echo $sqlu;
	}
	if ($fetch['doc_lv2']==$_POST['usid']) {
		if($_POST['chkdoc']=='yes'){
	$chkdoc='approved';
}else if($_POST['chkdoc']=='no'){
	$chkdoc='noapproved';
}
		//echo "lvl2<br>";
		//echo "lvl2 ".$_POST['usid'];
		//echo "<br>";
		//echo $fetch['doc_aprlv2'];
		//echo "<br>sssss";
		$sqlu="UPDATE tb_status_send
				SET doc_aprlv2 = '$chkdoc'
				WHERE ss_docname_id like '$form'";
		$res = mysqli_query($mysqli,$sqlu);
				//echo $sqlu;

	}
	if ($fetch['doc_lv3']==$_POST['usid']) {
		if($_POST['chkdoc']=='yes'){
	$chkdoc='approved';
}else if($_POST['chkdoc']=='no'){
	$chkdoc='noapproved';
}
		//echo "lvl3<br>";
		//echo "lvl3 ".$_POST['usid'];
		//echo "<br>";
		//echo $fetch['doc_aprlv3'];
		//echo "<br>sssss";
		$sqlu="UPDATE tb_status_send
				SET doc_aprlv3 = '$chkdoc'
				WHERE ss_docname_id like '$form'";
		$res = mysqli_query($mysqli,$sqlu);
				//echo $sqlu;
	}
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย'); window.location.href='_approve_all.php';</script>";
?> 