<?php 
	session_start();
    include 'connectdb.php'; 
?>
 
<?php         
        echo "Department ".$dpm=$_POST['dpm'];
    	echo "Create Sub Department".$CreateSub=$_POST['CreateSub']; 

                $DB2 = "SELECT dpm_id FROM tb_department
                WHERE dpm_id ='$dpm' ";
                $objQuery2 = mysqli_query($mysqli,$DB2);
                $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);

        $sql2="INSERT INTO tb_sub_department (sub_name, sub_department_id) VALUES ('$CreateSub','".$objResult2['dpm_id']."')";
        $query2=mysqli_query($mysqli, $sql2);
        
        echo "<script>alert('Save Data Complete'); window.location.href='_createsubdepartment.php';</script>";

    
?>