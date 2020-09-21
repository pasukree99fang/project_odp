<?php 
	session_start();
 	include 'connectdb.php'; 
    if(move_uploaded_file($_FILES["inputfile"]["tmp_name"],"file/".$_FILES["inputfile"]["name"])){
    	echo "Document title ".$inputEmail3=$_POST['inputEmail3'];
    	echo "<br>";
    	echo "File input ".$file_input=$_FILES["inputfile"]["name"];
    	echo "<br>";
    	echo "Step number of approval ".$stepnum=$_POST['stepnum'];
    	echo "<br>";

    	echo "Department ".$dpm=$_POST['dpm'];
    	echo "<br>";
    	echo "Sub Department ".$sub_dpm=$_POST['sub_dpm'];
    	echo "<br>";
    	echo "Position ".$pos=$_POST['pos'];
		echo "<br>";
    	$sqli="SELECT a.*,b.* FROM tb_affiliation a 
      				LEFT OUTER JOIN (SELECT * FROM tb_user) b ON (a.afft_user_id=b.us_id) 
			WHERE a.afft_department_id ='$dpm' and a.afft_sub_department_id='$sub_dpm'and a.afft_position_id='$pos'";
        $queryi=mysqli_query($mysqli, $sqli);
        $res = mysqli_fetch_array($queryi);
        echo $us_username=$res['us_username'];


        $sql="INSERT INTO tb_form_element (ele_title,ele_version_id) VALUES ('$inputEmail3','".$_FILES["inputfile"]["name"]."')";
        $query=mysqli_query($mysqli, $sql);

        $sql2="INSERT INTO tb_step_approver (sapp_form_id,sapp_approver_id,sapp_level) VALUES ('$inputEmail3','$us_username','$stepnum')";
        $query2=mysqli_query($mysqli, $sql2);

        echo "<script>alert('Upload File Complete'); window.location.href='_createdocument.php';</script>";
    }
?>