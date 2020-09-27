<?php 
	session_start();
	 include 'connectdb.php'; 
	 
    // if(move_uploaded_file($_FILES["uploadbutton"]["tmp_name"],"file/".$_FILES["uploadbutton"]["name"])){
    // 	echo "Upload Photo".$uploadbutton=$_POST['uploadbutton'];
    // 	echo "<br>";
    // 	echo "File input ".$file_input=$_FILES["uploadbutton"]["name"];
    // 	echo "<br>";
        
    //     $sql="UPDATE tb_user set us_photo='$uploadbutton','".$_FILES["uploadbutton"]["name"]."')";
    //     $query=mysqli_query($mysqli, $sql);


    //     echo "<script>alert('Upload File Complete'); window.location.href='_createdocument.php';</script>";
	// }
	
	echo "Username ".$username=$_SESSION['us_username'];
	echo "Firstname ".$inputfname = $_POST['inputfname'];
	echo "Lastname ".$inputlname=$_POST['inputlname'];
	echo "Email ".$inputEmail=$_POST['inputEmail'];
	
	$strSQL1 = "SELECT * FROM tb_user where us_username='$username'";
	  $objQuery1 = mysqli_query($mysqli,$strSQL1);
	  $objResult = mysqli_fetch_array($objQuery1);


	$sql="UPDATE tb_user set us_firstname='$inputfname' , us_lastname='$inputlname', us_email='$inputEmail' where us_username='$objResult[us_username]' ";
	$query=mysqli_query($mysqli, $sql);
  
     echo "<script>alert('Upload File Complete'); window.location.href='_createdocument.php';</script>";


 
	//Working but update all user
	// $strSQL1 = "SELECT * FROM tb_user ";
  	// $objQuery1 = mysqli_query($mysqli,$strSQL1);
	// $objResult = mysqli_fetch_array($objQuery1);
	
	// if($_SESSION['us_username']==$objResult['us_username']){
	// 	$sql="UPDATE tb_user set us_firstname='$inputfname' ";
	// 	$query=mysqli_query($mysqli, $sql);

     //echo "<script>alert('Upload File Complete'); window.location.href='_createdocument.php';</script>";

	// }else{
	// 	
	// }
	

	// $sql="UPDATE tb_user set us_firstname='$inputfname','".$res["inputfname"]["name"]."')";
    //  $query=mysqli_query($mysqli, $sql);
	// if($_SESSION['us_username']==$res['us_username']){
	//  echo "yes"	;
	// }
	

	
	


//still not working
// $selectuser ="SELECT us_id from tb_user where us_username='{$_SESSION[us_username]}'";
// 	$objQuery1 = mysqli_query($selectuser);
	
 
// 	$sql="UPDATE tb_user set us_firstname='$inputfname' where us_id='$objResult[us_id']'";
// 		$query=mysqli_query($mysqli, $sql);
?>


