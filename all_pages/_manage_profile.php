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
		   
	echo "Firstname".$inputfname = $_POST['inputfname'];
	
	

	$strSQL1 = "SELECT * FROM tb_user";
  	$objQuery1 = mysqli_query($mysqli,$strSQL1);
	$objResult = mysqli_fetch_array($objQuery1);
	
	if($_SESSION['us_username']==$objResult['us_username']){
		$sql="UPDATE tb_user set us_firstname='$inputfname' ";
$query=mysqli_query($mysqli, $sql);
	}else{
		
	}
	

	// $sql="UPDATE tb_user set us_firstname='$inputfname','".$res["inputfname"]["name"]."')";
    //  $query=mysqli_query($mysqli, $sql);
	// if($_SESSION['us_username']==$res['us_username']){
	//  echo "yes"	;
	// }
	

	
	



?>