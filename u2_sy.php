<?php

mysql_connect("localhost","root","");
mysql_select_db("update_activity_sy");
mysql_query("create table update_sy(rollno int,student_name text,topic text,course_incharge text,conducted_by text,date text,time text,remark text)");

?>

