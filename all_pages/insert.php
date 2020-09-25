<?Php
If(Isset($_POST["Subject"]))
{
Include("Connect.Php");
$Subject = Mysqli_real_escape_string($mysqli, $_POST["Subject"]);
$Comment = Mysqli_real_escape_string($mysqli, $_POST["Comment"]);
$Query = "INSERT INTO tb_notification (message_titlet, message_desc)VALUES ('$Subject', '$Comment')";
Mysqli_query($mysqli, $Query);
}

?>