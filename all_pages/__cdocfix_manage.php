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
session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
$connect = mysqli_connect("localhost", "root", "", "odp");
$dtitle=$_POST['dtitle'];
$number=0;
if (isset($_POST["labeltextx"])) {
	$labeltextx = count($_POST["labeltextx"]);
	$number+=$labeltextx;
}
//echo "<br>";
if (isset($_POST["labeltextx"])) {
$inputtextx = count($_POST["labeltextx"]);
$number+=$inputtextx;
}
//echo "<br>";
if (isset($_POST["textareax"])) {
$textareax = count($_POST["textareax"]);
$number+=$textareax;
}
//echo "<br>";
if (isset($_POST["filex"])) {
$filex = count($_POST["filex"]);
$number+=$filex;
}
//echo "<br>";
if (isset($_POST["chkboxx"])) {
$chkboxx = count($_POST["chkboxx"]);
$number+=$chkboxx;
}
//echo "<br>";
if (isset($_POST["radiox"])) {
$radiox = count($_POST["radiox"]);
$number+=$radiox;
}
$user_create=$_SESSION['us_username'];
if($_POST['stepnum']=='1'){
	$sta=$_POST['stepnum'];
	$polv1=$_POST['user'];
	$sql = "INSERT INTO tb_document(doc_form_id,doc_user_id,doc_step_approval,doc_lvl1) 
			VALUES('$dtitle','$user_create','$sta','$polv1'
				)";
			mysqli_query($connect, $sql);
}else if($_POST['stepnum']=='2'){
	$sta=$_POST['stepnum'];
	$polv1=$_POST['user'];
	$polv2=$_POST['user2'];
	$sql = "INSERT INTO tb_document(doc_form_id,doc_user_id,doc_step_approval,doc_lvl1,doc_lvl2) 
			VALUES('$dtitle','$user_create','$sta','$polv1','$polv2'
				)";
			mysqli_query($connect, $sql);
}else if($_POST['stepnum']=='3'){
	$sta=$_POST['stepnum'];
	$polv1=$_POST['user'];
	$polv2=$_POST['user2'];
	$polv3=$_POST['user3'];
	$sql = "INSERT INTO tb_document(doc_form_id,doc_user_id,doc_step_approval,doc_lvl1,doc_lvl2,doc_lvl3) 
			VALUES('$dtitle','$user_create','$sta','$polv1','$polv2','$polv3'
				)";
			mysqli_query($connect, $sql);
}


//echo "<br>";
//echo $number;
//$number=$labeltextx+$inputtextx+$textareax+$filex+$chkboxx+$radiox;
function extract_int($str){
     preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $str, $regs);
     return (intval($regs[1]));
}

for($i=0; $i<$number; $i++){
	if($_POST["labeltextx"][$i] != '')
		{	
			//echo "<br>";
			//echo "text_title :".$_POST["labeltext"][$i];
			//echo "<br>";
			//echo "doc Title :".$dtitle;
			//echo "<br>";
			$a=$_POST["labeltextx"][$i];
			//echo "tag_no :".
			$numtag=extract_int($a);
			//echo "<br>";
			$b = explode(",",$a);
			$c = $b[0];
			//echo "tag_type :".$c;
			//echo "<br>";
			//echo "tag_type_name :".
			$typename=$c.$numtag;
			$sql = "INSERT INTO create_doc_table(text_title,tag_type,tag_type_name,doc_title,tag_no) 
			VALUES('".mysqli_real_escape_string($connect, $_POST["labeltext"][$i])."'
					,'$c','$typename','$dtitle','$numtag'
				)";
			// echo "<br>";
			// echo $sql;
			// echo "<br>";
			mysqli_query($connect, $sql);
		}
	if($_POST["inputtextx"][$i] != '')
		{
			//echo "<br>";
			//echo "text_title :".$_POST["inputtext"][$i];
			//echo "<br>";
			//echo "doc Title :".$dtitle;
			$a=$_POST["inputtextx"][$i];
			//echo "<br>";
			//echo "tag_no :".
			$numtag=extract_int($a);
			//echo "<br>";
			$b = explode(",",$a);
			$c = $b[0];
			//echo "tag_type :".$c;
			//echo "<br>";
			//echo "tag_type_name :".
			$typename=$c.$numtag;
			$sql = "INSERT INTO create_doc_table(text_title,tag_type,tag_type_name,doc_title,tag_no) 
			VALUES('".mysqli_real_escape_string($connect, $_POST["inputtext"][$i])."'
					,'$c','$typename','$dtitle','$numtag'
				)";
			// echo "<br>";
			// echo $sql;
			// echo "<br>";
			
			mysqli_query($connect, $sql);
		}
		if($_POST["textareax"][$i] != '')
		{
			//echo "<br>";
			//echo "text_title :".$_POST["textarea"][$i];
			//echo "<br>";
			//echo "doc Title :".$dtitle;
			//echo "<br>";
			$a=$_POST["textareax"][$i];
			//echo "tag_no :".extract_int($a);
			$numtag=extract_int($a);
			//echo "<br>";
			$b = explode(",",$a);
			$c = $b[0];
			//echo "tag_type :".$c;
			//echo "<br>";
			//echo "tag_type_name :".$c.$numtag;
			$typename=$c.$numtag;
			$sql = "INSERT INTO create_doc_table(text_title,tag_type,tag_type_name,doc_title,tag_no) 
			VALUES('".mysqli_real_escape_string($connect, $_POST["textarea"][$i])."'
					,'$c','$typename','$dtitle','$numtag'
				)";
			// echo "<br>";
			// echo $sql;
			// echo "<br>";
			
			mysqli_query($connect, $sql);
		}
		//if($_POST["filex"][$i] != '')
		//{	
			//echo "<br>";
			//echo "text_title :".$_POST["files"][$i];
			//echo "<br>";
			//echo "doc Title :".$dtitle;
			//echo "<br>";
			//$a=$_POST["filex"][$i];
			//echo "tag_no :".extract_int($a);
			//$numtag=extract_int($a);
			//echo "<br>";
			//$b = explode(",",$a);
			//$c = $b[0];
			//echo "tag_type :".$c;
			//echo "<br>";
			//echo "tag_type_name :".$c.$numtag;
			//$typename=$c.$numtag;
			//$sql = "INSERT INTO create_doc_table(text_title,tag_type,tag_type_name,doc_title,tag_no) 
			//VALUES('".mysqli_real_escape_string($connect, $_POST["files"][$i])."'
					//,'$c','$typename','$dtitle','$numtag'
				//)";
			//echo "<br>";
			// echo $sql;
			
			//mysqli_query($connect, $sql);
		//}
		if($_POST["chkboxx"][$i] != '')
		{
			//echo "<br>";
			//echo "text_title :".$_POST["chkbox"][$i];
			//echo "<br>";
			//echo "doc Title : ".$dtitle;
			//echo "<br>";
			$a=$_POST["chkboxx"][$i];
			//echo "tag_no :".extract_int($a);
			$numtag=extract_int($a);
			//echo "<br>";
			$b = explode(",",$a);
			$c = $b[0];
			//echo "tag_type :".$c;
			//echo "<br>";
			//echo "tag_type_name :".$c.$numtag;
			$typename=$c.$numtag;
			$sql = "INSERT INTO create_doc_table(text_title,tag_type,tag_type_name,doc_title,tag_no) 
			VALUES('".mysqli_real_escape_string($connect, $_POST["chkbox"][$i])."'
					,'$c','$typename','$dtitle','$numtag'
				)";
			// echo "<br>";
			// echo $sql;
			// echo "<br>";
			mysqli_query($connect, $sql);
		}
		if($_POST["radiox"][$i] != '')
		{
			//echo "<br>";
			//echo "text_title :".$_POST["radios"][$i];
			//echo "<br>";
			//echo "doc Title :".$dtitle;
			//echo "<br>";
			$a=$_POST["radiox"][$i];
			//echo "tag_no :".extract_int($a);
			$numtag=extract_int($a);
			//echo "<br>";
			$b = explode(",",$a);
			$c = $b[0];
			//echo "tag_type :".$c;
			//echo "<br>";
			//echo "tag_type_name :".$c.$numtag;
			$typename=$c;
			$sql = "INSERT INTO create_doc_table(text_title,tag_type,tag_type_name,doc_title,tag_no) 
			VALUES('".mysqli_real_escape_string($connect, $_POST["radios"][$i])."'
					,'$c','$typename','$dtitle','$numtag'
				)";
			// echo "<br>";
			// echo $sql;
			// echo "<br>";
			
			mysqli_query($connect, $sql);
		}
}
echo "<script>alert('บันทึกข้อมูลเรียบร้อย'); window.location.href='__cdocfix.php';</script>";