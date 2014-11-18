<?php

mysql_connect("localhost","root","");
mysql_select_db("timetable_ty");

mysql_query("insert into tt_ty values('Monday','Dr.D.B.Kulkarni')");
mysql_query("insert into tt_ty values('Tuesday','C.L.Shinde')");
mysql_query("insert into tt_ty values('Wednesday','A.J.Umbarkar')");
mysql_query("insert into tt_ty values('Thursday','D.M.Kaulgud')");
mysql_query("insert into tt_ty values('Friday','G.V.Deshpande')");

?>
