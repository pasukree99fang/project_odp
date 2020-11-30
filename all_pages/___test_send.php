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
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$connect = mysqli_connect("localhost", "root", "", "odp");
$number = count($_POST["ds_send"]);
$form=$_POST['docform'];
$fullname=$_SESSION['fullname'];
$rannum=rand(1,1000);
$formnum=$_POST['docform'].$rannum;
$now=Date('Y-m-d');
    $sqls="SELECT * FROM tb_document WHERE doc_form_id like '$form'";
    $objQuery = mysqli_query($connect, $sqls);
    $row = mysqli_fetch_array($objQuery);
    $apr=$row['doc_step_approval'];
if($row['doc_step_approval']=='1'){
    if($row['doc_lvl1']!=''){
        $doc_lvl1=$row['doc_lvl1'];
    }else{ $doc_lvl1="pending"; }
}else if($row['doc_step_approval']=='2'){
    if($row['doc_lvl1']!=''){
        $doc_lvl1=$row['doc_lvl1'];
    }else{ $doc_lvl1="pending"; }
    if($row['doc_lvl2']!=''){
        $doc_lvl2=$row['doc_lvl2'];
    }else{ $doc_lvl2="pending"; }
    if($row['doc_applvl1']!=''){
        $doc_applvl1=$row['doc_applvl1'];
    }else{ $doc_applvl1="pending"; }
    if($row['doc_applvl2']!=''){
        $doc_applvl2=$row['doc_applvl2'];
    }else{ $doc_applvl2="pending"; }
}else if($row['doc_step_approval']=='3'){
    if($row['doc_lvl1']!=''){
        $doc_lvl1=$row['doc_lvl1'];
    }else{ $doc_lvl1="pending"; }
    if($row['doc_lvl2']!=''){
        $doc_lvl2=$row['doc_lvl2'];
    }else{ $doc_lvl2="pending"; }
    if($row['doc_lvl3']!=''){
        $doc_lvl3=$row['doc_lvl3'];
    }else{ $doc_lvl3="pending"; }
    if($row['doc_applvl1']!=''){
        $doc_applvl1=$row['doc_applvl1'];
    }else{ $doc_applvl1="pending"; }
    if($row['doc_applvl2']!=''){
        $doc_applvl2=$row['doc_applvl2'];
    }else{ $doc_applvl2="pending"; }
    if($row['doc_applvl3']!=''){
        $doc_applvl3=$row['doc_applvl3'];
    }else{ $doc_applvl3="pending"; }
}
    $sql_docsend="
        INSERT INTO tb_status_send(ss_docname,ss_docname_id,ss_namesend,ss_date,step_apr,doc_lv1,doc_aprlv1,doc_lv2,doc_aprlv2,doc_lv3,doc_aprlv3)
        VALUES('$form','$formnum','$fullname','$now','$apr','$doc_lvl1','$doc_applvl1','$doc_lvl2','$doc_applvl2','$doc_lvl3','$doc_applvl3')
    ";
    //echo $sql_docsend;
    mysqli_query($connect, $sql_docsend);

if (isset($_POST['ds_send']) && $_POST['ds_send'] != '')
{
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["ds_send"][$i] != ''))
        {

            //$_POST["ds_sendh"][$i].":".$_POST["ds_send"][$i]."<br>";
            //$sql = "INSERT INTO tb_department(dpm_name,dpm_company_id) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."','".mysqli_real_escape_string($connect, $_POST["cpn_id"])."')";

            $sql="INSERT INTO tb_doc_send(ds_title,ds_head1,ds_detail1,ds_us_send)
            VALUES('$formnum','".mysqli_real_escape_string($connect, $_POST["ds_sendh"][$i])."'
            ,'".mysqli_real_escape_string($connect, $_POST["ds_send"][$i])."'
            ,'$fullname')";
            mysqli_query($connect, $sql);
        }
    }


    echo "Data Inserted";
}
else
{
    echo "Please Enter";
}