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
            $sql = "INSERT INTO tb_position(pst_name,pst_sub_department_id) 
            VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."'
                    ,'".mysqli_real_escape_string($connect, $_POST["sub_id"])."')";
            mysqli_query($connect, $sql);
        }
    }
    echo "Data Inserted";
}
else
{
    echo "Please Enter Name";
}