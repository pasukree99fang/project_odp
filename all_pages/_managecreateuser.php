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
    include 'connectdb.php'; 
    //เก็บไฟล์รูป
// if(move_uploaded_file($_FILES["InputfileUser"]["tmp_name"],"file/".$_FILES["InputfileUser"]["name"])){
//     $file_input=$_FILES["InputfileUser"]["name"];
// }
if(isset($_POST['cpn_id'],$_POST['UsernameUser'],$_POST['PasswordUser'],$_POST['FirstnameUser']
,$_POST['LastnameUser'],$_POST['EmailUser'],$_POST['PasswordForApprove'],$_POST['IsAdminUser']
,$_POST['IsApprovalUser'],$_POST['dp_us'],$_POST['sub_dp'],$_POST['pos'])){

    $cpn_id=$_POST['cpn_id'];
    $UsernameUser=$_POST['UsernameUser'];
    $PasswordUser=$_POST['PasswordUser'];
    $FirstnameUser=$_POST['FirstnameUser'];
    $LastnameUser=$_POST['LastnameUser'];
    $EmailUser=$_POST['EmailUser'];
    $PasswordForApprove=$_POST['PasswordForApprove'];
    $IsAdminUser=$_POST['IsAdminUser'];
    $IsApprovalUser=$_POST['IsApprovalUser'];
    $DepartmentUser=$_POST['dp_us'];
    $SubDepartmentUser=$_POST['sub_dp'];
    $PositionUser=$_POST['pos'];
    if(isset($_POST['chkmanager'])){
        $chkmanager=$_POST['chkmanager'];
    }else{ $chkmanager=0; }

    // ManagerUser หา user id ของหัวหน้า
    $SQL0 = "SELECT a.us_id, a.us_username, a.us_firstname, a.us_manager,
                c.cpn_id, c.cpn_name, b.pst_id,b.pst_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_position) b ON (a.us_po = b.pst_id)
                LEFT OUTER JOIN (SELECT * FROM tb_company) c ON (a.us_company_id = c.cpn_id)
                WHERE a.us_manager = '1' and a.us_company_id = '".$_POST['cpn_id']."'";
                $objQuery0 = mysqli_query($mysqli,$SQL0);
				$objResult0 = mysqli_fetch_array($objQuery0,MYSQLI_ASSOC);
                $ManagerUser = $objResult0['us_username'];
                echo "<br>";
$sql1="INSERT INTO tb_user (us_username, us_password, us_firstname, us_lastname, us_email, us_password_approve,
                us_manager_id, us_isadmin, us_isapproval, us_company_id, us_dp, us_sub_dp, us_po, us_manager) 
VALUES ('$UsernameUser','$PasswordUser','$FirstnameUser','$LastnameUser','$EmailUser','$PasswordForApprove','$ManagerUser',
'$IsAdminUser','$IsApprovalUser','$cpn_id','$DepartmentUser','$SubDepartmentUser','$PositionUser','$chkmanager')";
$query=mysqli_query($mysqli, $sql1);


// echo $sql1;
echo "<script>alert('Save Data Complete'); window.location.href='_createuser.php';</script>";  
}
else echo "<script>alert('Please enter data completely'); window.location.href='_createuser.php';</script>";
?>