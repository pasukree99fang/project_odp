<?php 
	session_start();
 	include 'connectdb.php'; 
    if(move_uploaded_file($_FILES["uploadbutton"]["tmp_name"],"file/".$_FILES["uploadbutton"]["name"])){
    	echo "Upload Photo".$uploadbutton=$_POST['uploadbutton'];
    	echo "<br>";
    	echo "File input ".$file_input=$_FILES["uploadbutton"]["name"];
    	echo "<br>";
        
        $sql="UPDATE tb_user set us_photo='$uploadbutton','".$_FILES["uploadbutton"]["name"]."')";
        $query=mysqli_query($mysqli, $sql);

        
        echo "<script>alert('Upload File Complete'); window.location.href='_createdocument.php';</script>";
    }
?>