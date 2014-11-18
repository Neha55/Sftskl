<?php

mysql_connect("localhost","root","");
mysql_select_db("timetable_btech");

mysql_query("insert into tt_btech values('Monday','A.A.Umbarkar')");
mysql_query("insert into tt_btech values('Tuesday','A.A.Umbarkar')");
mysql_query("insert into tt_btech values('Wednesday','U.B.Chavan')");
mysql_query("insert into tt_btech values('Thursday','B.S.Shetty')");
mysql_query("insert into tt_btech values('Friday','P.K.Kharat')");

?>
