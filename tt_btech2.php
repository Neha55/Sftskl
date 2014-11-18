<?php

mysql_connect("localhost","root","");
mysql_select_db("timetable_btech");
mysql_query("create table tt_btech(day text,course_incharge text)");

?>

