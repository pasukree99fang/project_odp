<?php 
session_start(); 
include 'connectdb.php';
if(isset($_REQUEST["depart"])){
    $depart =$_REQUEST["depart"];
    
    //$sql2= "SELECT * FROM  tb_position WHERE pst_id = '$poid' "; 
    $sql2= "SELECT * FROM  tb_sub_department WHERE sub_department_id = '$depart' "; 
    $sql= "SELECT count(*) as countdata FROM  tb_sub_department WHERE sub_department_id = '$depart' "; 
    
    $result2 = mysqli_query($mysqli, $sql2); 
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($result);
    if($row['countdata'] > 0){
        echo"<option value='' selected disabled>Choose Sub Department</option>";
        while($row2 = mysqli_fetch_array($result2)) {
        echo"<option value='$row2[sub_id]'>" .$row2["sub_name"]." </option>";
        }
    }else{
        echo '<option value="" selected disabled>No Data!</option>';
    }
}
if(isset($_REQUEST["sub_dpid"])){
    $sub_dpid =$_REQUEST["sub_dpid"];
    
    $sql2= "SELECT * FROM  tb_position WHERE pst_sub_department_id = '$sub_dpid' "; 
    $sql= "SELECT count(*) as countdata FROM  tb_position WHERE pst_sub_department_id = '$sub_dpid' "; 
    
    $result2 = mysqli_query($mysqli, $sql2); 
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($result);
    if($row['countdata'] > 0){
        echo"<option value='' selected disabled>Choose Sub Department</option>";
        while($row2 = mysqli_fetch_array($result2)) {
        echo"<option value='$row2[pst_id]'>" .$row2["pst_name"]." </option>";
        }
    }else{
        echo '<option value="" selected disabled>No Data!</option>';
    }
}
?>