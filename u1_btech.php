<?php

$con=mysql_connect("localhost","root","");

// Check connection
if (!$con)
  {

	echo "Connected...";
  
  }

  
mysql_query("create database update_activity_btech");

?>

