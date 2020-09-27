<?php 
	session_start();
    include 'connectdb.php'; 
?>
 
<?php         
        echo "Department ".$sub=$_POST['sub_dpm'];
        echo "Create Position ".$CreatePosition=$_POST['CreatePosition'];

                $DB3 = "SELECT sub_id FROM tb_sub_department
                WHERE sub_name ='$CreateSub' ";
                $objQuery3 = mysqli_query($mysqli,$DB3);
                $objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);

        $sql3="INSERT INTO tb_position (pst_name, pst_sub_department_id) VALUES ('$CreatePosition','".$objResult3['sub_id']."')";
        $query3=mysqli_query($mysqli, $sql3);
        
        echo "<script>alert('Save Data Complete'); window.location.href='_createposition.php';</script>";

    
?>