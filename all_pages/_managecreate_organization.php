<?php 
	session_start();
    include 'connectdb.php'; 
?>

<?php         
        echo "Company ".$cpn_name=$_POST['cpn_name'];
        echo "<br>";
        echo "Create Department ".$CreateDepartment=$_POST['CreateDepartment'];
    	echo "<br>";
    	echo "Create Sub Department".$CreateSub=$_POST['CreateSub']; 
    	echo "<br>";
        echo "Create Position ".$CreatePosition=$_POST['CreatePosition'];
        
                $DB1 = "SELECT cpn_id FROM tb_company
                WHERE cpn_name ='$cpn_name' ";
                $objQuery1 = mysqli_query($mysqli,$DB1);
                $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);

                $DB2 = "SELECT dpm_id FROM tb_department
                WHERE dpm_name ='$CreateDepartment' ";
                $objQuery2 = mysqli_query($mysqli,$DB2);
                $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);

                $DB3 = "SELECT sub_id FROM tb_sub_department
                WHERE sub_name ='$CreateSub' ";
                $objQuery3 = mysqli_query($mysqli,$DB3);
                $objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);

        $sql1="INSERT INTO tb_department (dpm_name, dpm_company_id) VALUES ('$CreateDepartment','$objResult1')";
        $query1=mysqli_query($mysqli, $sql1);

        $sql2="INSERT INTO tb_sub_department (sub_name, sub_department_id) VALUES ('$CreateDepartment','$objResult2')";
        $query2=mysqli_query($mysqli, $sql2);

        $sql3="INSERT INTO tb_position (pst_name, pst_sub_department_id) VALUES ('$CreateDepartment','$objResult3')";
        $query3=mysqli_query($mysqli, $sql3);


        echo "<script>alert('Save Data Complete'); window.location.href='_createorganization.php';</script>";

    
?>