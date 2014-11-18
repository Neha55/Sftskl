<?php

mysql_connect("localhost","root","");
mysql_select_db("timetable_ty");
mysql_query("create table tt_ty(day text,course_incharge text)");

?>

