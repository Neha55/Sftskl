<?php

mysql_connect("localhost","root","");
mysql_select_db("timetable_sy");
mysql_query("create table tt_sy(day text,course_incharge text)");

?>

