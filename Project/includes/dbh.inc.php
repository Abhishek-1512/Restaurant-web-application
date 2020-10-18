<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "wdm_database";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){

  die("Connection Failed: ".mysql_connect_error());
  echo "error in connection";
}

 ?>
