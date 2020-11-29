<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php 
//include '_session_login.php'
session_start(); 
include 'connectdb.php';
//echo $_POST["doc_id"];
$us_id=$_SESSION['us_id'];
 if(isset($_POST["doc_id"]))  
 {  
 	$doc_id=$_POST["doc_id"];
      $output = '';
      $sql = "SELECT * FROM tb_doc_send where ds_title like '$doc_id'";
      $res = mysqli_query($mysqli,$sql);
      
      $output .= '<div class="table-responsive">
        			<form action="chk_apr_doc.php?doc_name='.$_POST["doc_id"].'" method="POST">
        			<input type="hidden" name="usid" value="'.$us_id.'">
        			<table class="table table-bordered" border="0" width="100%">
      ';
      //$i=1;
      		while($fetch = mysqli_fetch_array($res))  
      	{
           //$output .= '<font size="4">'.$fetch['ds_head1'].':<br>'.$fetch['ds_detail1'].'</font><br>';
        	$output .='
           			<tr><td><font size="3"><b>'.$fetch['ds_head1'].' : </b></font></td><td><font size="3"> - '.$fetch['ds_detail1'].'</font></td></tr>
           				
           ';
  		} 
  		// <td style="text-align: center;"><button type="submit" class="btn btn-success" id="yes" name="yes">อนุมัติ</button></td>
  		// <td style="text-align: center;"><button type="submit" class="btn btn-danger" id="no" name="no">ไม่อนุมัติ</button></td>

                			//<option value="" selected disabled>เลือก</option>
  		$output.='
  				<tr>
  					<td colspan="2" align="center">
                      	<select class="form-control" name="chkdoc" id="chkdoc">
                			<option value="yes">อนุมัติ</option>
                			<option value="no">ไม่อนุมัติ</option>
              			</select>
                    </td>
  				</tr>
  				<tr>
                    <td colspan="2" align="center">
                      <button type="submit" class="btn btn-success" align="center">ตกลง</button>
                    </td>
                  </tr>

  		</table>
  		</form>
           		</div>';
  		// $output.='
  		// <button type="submit">อนุมัติ</button>';
      echo $output; 
}



















?>
