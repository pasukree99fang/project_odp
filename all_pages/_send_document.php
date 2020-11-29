<!-- ชื่อ doc
ชื่อเรา
วันที่ เวลา
step app
lvl -->
<!-- count นับ ว่าสร้างมากี่ แท็กแล้วฟิกตัว เช่น
if tag_type_name 5
ก็เรียง
input5

textarea13

file14

checkbox15

radio
ไปเลย ***ใบลาป่วย2 -->
<?php include 'connectdb.php'; ?>
<?php
// echo $_POST['docform'];
//                   $form=$_REQUEST['docform'];
                  // $strSQL = "SELECT * FROM create_doc_table where doc_title='$form' and tag_type_name not like 'label%' order by tag_no asc";
                  // $objQuery = mysqli_query($mysqli,$strSQL);
                  
                  // while ($row = mysqli_fetch_array($objQuery)) {
                  // 	echo "<br>";
                  // 	echo $row['tag_type_name'];
                  // 	echo "<br>";
//                   }
if ($_POST['docform']=='ใบลางาน') {
	echo $form=$_POST['docform'];
	                  $strSQL = "SELECT * FROM create_doc_table where doc_title='$form' and tag_type_name not like 'label%' order by tag_no asc";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  
                  while ($row = mysqli_fetch_array($objQuery)) {
                  	echo "<br>";
                  	echo $row['tag_type_name'];
                  }
        $sql="INSERT INTO tb_doc_send(ds_title,ds_head1,ds_detail1,ds_head2,ds_detail2,ds_head3,ds_detail3,ds_head4,ds_detail4,ds_head5,ds_detail5,ds_head6,ds_detail6)
        	VALUES()";
}
if ($_POST['docform']=='ใบคำร้อง') {
	echo $form=$_POST['docform'];
	$strSQL = "SELECT * FROM create_doc_table where doc_title='$form' and tag_type_name not like 'label%' order by tag_no asc";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  
                  while ($row = mysqli_fetch_array($objQuery)) {
                  	echo "<br>";
                  	echo $row['tag_type_name'];
                  }
}
if ($_POST['docform']=='ใบขอสั่งซื้อ/จ้าง') {
	echo $form=$_POST['docform'];
	$strSQL = "SELECT * FROM create_doc_table where doc_title='$form' and tag_type_name not like 'label%' order by tag_no asc";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  
                  while ($row = mysqli_fetch_array($objQuery)) {
                  	echo "<br>";
                  	echo $row['tag_type_name'];
                  }
}
if ($_POST['docform']=='ใบคำขอเปลี่ยนชื่อ') {
	echo $form=$_POST['docform'];
	$strSQL = "SELECT * FROM create_doc_table where doc_title='$form' and tag_type_name not like 'label%' order by tag_no asc";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  
                  while ($row = mysqli_fetch_array($objQuery)) {
                  	echo "<br>";
                  	echo $row['tag_type_name'];
                  }
}
if ($_POST['docform']=='ตัวอย่าง') {
	echo $form=$_POST['docform'];
	$strSQL = "SELECT * FROM create_doc_table where doc_title='$form' and tag_type_name not like 'label%' order by tag_no asc";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  
                  while ($row = mysqli_fetch_array($objQuery)) {
                  	echo "<br>";
                  	echo $row['tag_type_name'];
                  }
}
?>
