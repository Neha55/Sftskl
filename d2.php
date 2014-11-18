<?php

mysql_connect("localhost","root","");
mysql_select_db("teacher");
mysql_query("create table t1(Name varchar(20),Username varchar(20),Password varchar(20))");

?>

