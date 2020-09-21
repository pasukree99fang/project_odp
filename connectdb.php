<?php
$mysqli = new mysqli("db-odp.mysql.database.azure.com","adminodp@db-odp","60admin.","odp");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>