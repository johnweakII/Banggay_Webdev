<?php
  $servername = "localhost";
  $hostusername = "root";
  $hostpassword = ""; // Replace with actual password or use environment variables
  $dbname = "fashion";
  $port = 3306;

$db =new mysqli($servername, $hostusername, $hostpassword, $dbname, $port);

if ($db->connect_errno !== 0) {
  die ('We are down at the moment, please try again later');
}

//echo "Connected Successfully!";
?>
