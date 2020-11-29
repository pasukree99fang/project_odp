<?php
$conn = new mysqli("localhost","root","","odp");
// "db-odp.mysql.database.azure.com","adminodp@db-odp","60admin.","odp"
//"db-odp.mysql.database.azure.com","adminodp@db-odp","odpsit26.","odp"
//"localhost","root","","odp"
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>

