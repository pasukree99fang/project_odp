<?php 
	session_start();
    include 'connectdb.php'; 

    if(move_uploaded_file($_FILES["InputfileUser"]["tmp_name"],"file/".$_FILES["InputfileUser"]["name"])){
        echo "Username ".$UsernameUser=$_POST['UsernameUser'];
    	echo "<br>";
    	echo "Password ".$PasswordUser=$_POST['PasswordUser']; 
    	echo "<br>";
    	echo "Firstname ".$FirstnameUser=$_POST['FirstnameUser'];
		echo "<br>";
        echo "Lastname ".$LastnameUser=$_POST['LastnameUser'];
    	echo "<br>";
    	echo "Email ".$EmailUser=$_POST['EmailUser']; 
    	echo "<br>";
    	echo "Password For Approve ".$PasswordForApprove=$_POST['PasswordForApprove'];
        echo "<br>";
        echo "IsAdmin ".$IsAdminUser=$_POST['IsAdminUser'];
    	echo "<br>";
    	echo "IsApproval ".$IsApprovalUser=$_POST['IsApprovalUser']; 
    	echo "<br>";
    	echo "Department ".$DepartmentUser=$_POST['DepartmentUser'];
		echo "<br>";
        echo "Sub Department ".$SubDepartmentUser=$_POST['SubDepartmentUser'];
    	echo "<br>";
    	echo "Position ".$PositionUser=$_POST['PositionUser']; 
    	echo "<br>";
        echo "Inputfile ".$file_input=$_FILES["InputfileUser"]["name"];
        echo "<br>";
        echo "Company ".$cpn_name=$_POST['cpn_name'];

        $sql="INSERT INTO tb_user (us_username, us_password, us_firstname, us_lastname, us_email, us_password_approve, us_) VALUES ('$inputEmail3','$us_username','$stepnum')";
        $query=mysqli_query($mysqli, $sql);


        echo "<script>alert('Save Data Complete'); window.location.href='_createuser.php';</script>";

    }
?>