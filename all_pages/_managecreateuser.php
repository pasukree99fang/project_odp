<?php 
	session_start();
    include 'connectdb.php'; 

    if(move_uploaded_file($_FILES["InputfileUser"]["tmp_name"],"file/".$_FILES["InputfileUser"]["name"])){
        echo "Username ".$UsernameUser=$_POST['UsernameUser'];
    	echo "Password ".$PasswordUser=$_POST['PasswordUser']; 
    	echo "Firstname ".$FirstnameUser=$_POST['FirstnameUser'];
        echo "Lastname ".$LastnameUser=$_POST['LastnameUser'];
    	echo "Email ".$EmailUser=$_POST['EmailUser']; 
    	echo "Password For Approve ".$PasswordForApprove=$_POST['PasswordForApprove'];
		echo "IsManager ".$chkmanager=$_POST['chkmanager'];
        echo "IsAdmin ".$IsAdminUser=$_POST['IsAdminUser'];
    	echo "IsApproval ".$IsApprovalUser=$_POST['IsApprovalUser']; 
    	echo "Department ".$DepartmentUser=$_POST['DepartmentUser'];
        echo "Sub Department ".$SubDepartmentUser=$_POST['SubDepartmentUser'];
    	echo "Position ".$PositionUser=$_POST['PositionUser']; 
        // echo "Company ".$cpn_name=$_POST['cpn_name'];
		echo "Inputfile ".$file_input=$_FILES["InputfileUser"]["name"];

				// Company id
				$SQL = "SELECT a.us_company_id, a.us_username, a.us_firstname, 
                b.cpn_id, b.cpn_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_company) b ON (a.us_company_id=b.cpn_id)
                WHERE us_username = '".$_SESSION['us_username']."'";
                $objQuery = mysqli_query($mysqli,$SQL);
				$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
				
				// ManagerUser หา user id ของหัวหน้า
				$SQL0 = "SELECT a.us_id, a.us_username, a.us_firstname, a.us_manager,
                b.afft_id, b.afft_user_id, b.afft_sub_department_id,
                c.dpm_id,c.dpm_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_affiliation) b ON (a.us_id=b.afft_user_id) 
                LEFT OUTER JOIN (SELECT * FROM tb_department) c ON (b.afft_department_id=c.dpm_id)
                WHERE a.us_manager = 'yes' and c.dpm_name = '$DepartmentUser'";
                $objQuery0 = mysqli_query($mysqli,$SQL0);
				$objResult0 = mysqli_fetch_array($objQuery0,MYSQLI_ASSOC);
				echo $ManagerUser = $objResult0['us_username'];


		if($chkmanager == 1){
			$IsManager = 'yes';
		}else if($chkmanager == 0){
			$IsManager = 'no';
		}

        $sql1="INSERT INTO tb_user (us_username, us_password, us_firstname, us_lastname, us_email, us_password_approve,
									us_manager_id, us_manager, us_isadmin, us_isapproval, us_company_id, us_photo) 
		VALUES ('$UsernameUser','$PasswordUser','$FirstnameUser','$LastnameUser','$EmailUser','$PasswordForApprove','$ManagerUser'
		'$IsManager','$IsAdminUser','$IsApprovalUser','".$objResult['cpn_id']."','$file_input')";
		$query=mysqli_query($mysqli, $sql1);

		if($FirstnameUser != null){
		//DB user
		$userSQL = "SELECT us_id FROM tb_user where us_name='$FirstnameUser'";
	  	$objQuery1 = mysqli_query($mysqli,$userSQL);
		$objResult1 = mysqli_fetch_array($objQuery1);
		// echo $userid=$objResult1['us_id'];
		//DB position
		$positionSQL = "SELECT pst_id FROM tb_position where pst_name='$PositionUser'";
	  	$objQuery2 = mysqli_query($mysqli,$positionSQL);
		$objResult2 = mysqli_fetch_array($objQuery2);
		// echo $positionid=$objResult2['pst_id'];
		//DB department
		$departmentSQL = "SELECT dpm_id FROM tb_department where dpm_name='$DepartmentUser'";
	  	$objQuery3 = mysqli_query($mysqli,$departmentSQL);
		$objResult3 = mysqli_fetch_array($objQuery3);
		// echo $departmentid=$objResult3['dpm_id'];
		//DB sub department
		$subdepartmentSQL = "SELECT sub_id FROM tb_sub_department where sub_name='$SubDepartmentUser'";
	  	$objQuery4 = mysqli_query($mysqli,$subdepartmentSQL);
		$objResult4 = mysqli_fetch_array($objQuery4);
		// echo $subdepartmentid=$objResult4['sub_id'];
		
		$sql2="INSERT INTO tb_affiliation (afft_user_id, afft_position_id, afft_department_id, afft_sub_department_id) 
		VALUES ('".$objResult1['us_id']."','".$objResult2['pst_id']."','".$objResult3['dpm_id']."','".$objResult4['sub_id']."')";
        $query=mysqli_query($mysqli, $sql2);
		}

        echo "<script>alert('Save Data Complete'); window.location.href='_createuser.php';</script>";

    }
?> 