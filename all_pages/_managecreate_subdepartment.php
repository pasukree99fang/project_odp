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
$connect = mysqli_connect("localhost", "root", "", "odp");
$number = count($_POST["name"]);
//echo $_POST["cpn_id"];
// if($number >= 1)
if (isset($_POST['name']) && $_POST['name'] != '')
{
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["name"][$i] != ''))
        {
            $sql = "INSERT INTO tb_sub_department(sub_name,sub_department_id) 
            VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."'
                    ,'".mysqli_real_escape_string($connect, $_POST["dpm_id"])."')";
            mysqli_query($connect, $sql);
        }
    }
    echo "Data Inserted";
}
else
{
    echo "Please Enter Name";
}