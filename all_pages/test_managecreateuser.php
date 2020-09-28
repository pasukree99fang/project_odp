<?php
    session_start();
    include 'connectdb.php'; 
    //เก็บไฟล์รูป
if(move_uploaded_file($_FILES["InputfileUser"]["tmp_name"],"file/".$_FILES["InputfileUser"]["name"])){
    $file_input=$_FILES["InputfileUser"]["name"];
}
if(isset($_POST['cpn_id'],$_POST['UsernameUser'],$_POST['PasswordUser'],$_POST['FirstnameUser']
,$_POST['LastnameUser'],$_POST['EmailUser'],$_POST['PasswordForApprove'],$_POST['IsAdminUser']
,$_POST['IsApprovalUser'],$file_input
,$_POST['DepartmentUser'],$_POST['SubDepartmentUser'],$_POST['PositionUser'])){

    $cpn_id=$_POST['cpn_id'];
    $UsernameUser=$_POST['UsernameUser'];
    $PasswordUser=$_POST['PasswordUser'];
    $FirstnameUser=$_POST['FirstnameUser'];
    $LastnameUser=$_POST['LastnameUser'];
    $EmailUser=$_POST['EmailUser'];
    $PasswordForApprove=$_POST['PasswordForApprove'];
    $IsAdminUser=$_POST['IsAdminUser'];
    $IsApprovalUser=$_POST['IsApprovalUser'];
    $DepartmentUser=$_POST['DepartmentUser'];
    $SubDepartmentUser=$_POST['SubDepartmentUser'];
    $PositionUser=$_POST['PositionUser'];
    if(isset($_POST['chkmanager'])){
        $chkmanager=$_POST['chkmanager'];
    }else{ $chkmanager=0; }

// echo $_POST['cpn_id'];
// echo "<br>";
// echo $_POST['UsernameUser'];
// echo "<br>";
// echo $_POST['PasswordUser'];
// echo "<br>";
// echo $_POST['FirstnameUser'];
// echo "<br>";
// echo $_POST['LastnameUser'];
// echo "<br>";
// echo $_POST['EmailUser'];
// echo "<br>";
// echo $_POST['PasswordForApprove'];
// echo "<br>";
// echo $_POST['IsAdminUser'];
// echo "<br>";
// echo $_POST['IsApprovalUser'];
// echo "<br>";
// echo $_POST['DepartmentUser'];
// echo "<br>";
// echo $_POST['SubDepartmentUser'];
// echo "<br>";
// echo $_POST['PositionUser'];
// echo "<br>";
// echo $file_input;
// echo "<br>";
// echo $chkmanager;
// echo "<br>";

    // ManagerUser หา user id ของหัวหน้า
    $SQL0 = "SELECT a.us_id, a.us_username, a.us_firstname, a.us_manager,
                b.afft_id, b.afft_user_id, b.afft_sub_department_id,
                c.dpm_id,c.dpm_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_affiliation) b ON (a.us_id=b.afft_user_id) 
                LEFT OUTER JOIN (SELECT * FROM tb_department) c ON (b.afft_department_id=c.dpm_id)
                WHERE a.us_manager = '1' and c.dpm_id = '".$_POST['DepartmentUser']."'";
                $objQuery0 = mysqli_query($mysqli,$SQL0);
				$objResult0 = mysqli_fetch_array($objQuery0,MYSQLI_ASSOC);
                echo $ManagerUser = $objResult0['us_username'];
                echo "<br>";
$sql1="INSERT INTO tb_user (us_username, us_password, us_firstname, us_lastname, us_email, us_password_approve,
                us_manager_id, us_manager, us_isadmin, us_isapproval, us_company_id, us_photo) 
VALUES ('$UsernameUser','$PasswordUser','$FirstnameUser','$LastnameUser','$EmailUser','$PasswordForApprove','$ManagerUser',
'$chkmanager','$IsAdminUser','$IsApprovalUser','$cpn_id','$file_input')";
$query=mysqli_query($mysqli, $sql1);
echo $sql1;
//echo "<script>alert('Save Data Complete'); window.location.href='_createuser.php';</script>";  
}//else echo "<script>alert('กฟน่้ร่นรกฟ'); window.location.href='_createuser.php';</script>";
?>