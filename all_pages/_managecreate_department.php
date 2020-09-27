<?php 
	session_start();
    include 'connectdb.php'; 
?>

<?php         
        echo "Company ".$cpn_name=$_POST['cpn_name'];
        echo "Create Department ".$CreateDepartment=$_POST['CreateDepartment'];

                // $DB1 = "SELECT cpn_id, cpn_name FROM tb_company
                // WHERE cpn_name ='$cpn_name'";
                // $objQuery1 = mysqli_query($mysqli,$DB1);
                // $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
                // echo $companyid=$objResult1['cpn_id'];

                    $SQL1 = "SELECT a.us_company_id, a.us_username, a.us_firstname, 
                    b.cpn_id, b.cpn_name FROM tb_user a 
                    LEFT OUTER JOIN (SELECT * FROM tb_company) b ON (a.us_company_id=b.cpn_id)
                    WHERE us_username = '".$_SESSION['us_username']."'";
                    $objQuery1 = mysqli_query($mysqli,$SQL1);
                    $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);

        $sql1="INSERT INTO tb_department (dpm_name, dpm_company_id) VALUES ('$CreateDepartment','".$objResult1['cpn_id']."')";
        $query1=mysqli_query($mysqli, $sql1);
        
        echo "<script>alert('Save Data Complete'); window.location.href='_createdepartment.php';</script>";

    
?>