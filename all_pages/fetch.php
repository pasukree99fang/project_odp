<?Php
Include('connectdb.php');
If(Isset($_POST['View'])){
If($_POST["View"] != '')
{
   $Update_query = "UPDATE tb_notification SET noti_status_id = 1 WHERE noti_status_id =0";
   Mysqli_query($Con, $Update_query);
}
$Query = "SELECT * FROM tb_notification ORDER BY noti_id DESC LIMIT 15";
$Result = Mysqli_query($mysqli, $Query);
$Output = '';
If(Mysqli_num_rows($Result) > 0)
{
While($Row = Mysqli_fetch_array($Result))
{
  $Output .= '
  <Li>
  <A Href="#">
  <Strong>'.$Row["message_titlet"].'</Strong><Br />
  <Small><Em>'.$Row["message_desc"].'</Em></Small>
  </A>
  </Li>
  ';
}
}
Else{
    $Output .= '<Li><A Href="#" Class="Text-Bold Text-Italic">No Notification Found</A></Li>';
}
$Status_query = "SELECT * FROM tb_notification WHERE noti_status_id=0";
$Result_query = Mysqli_query($mysqli, $Status_query);
$Count = Mysqli_num_rows($Result_query);
$Data = Array(
   'Notification' => $Output,
   'Unseen_notification'  => $Count
);
Echo Json_encode($Data);
}
?>