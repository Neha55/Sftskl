<?php

mysql_connect("localhost","root","");
mysql_select_db("timetable_sy");

mysql_query("insert into tt_sy values('Monday','P.M.Gouraj')");
mysql_query("insert into tt_sy values('Tuesday','H.G.Samant')");
mysql_query("insert into tt_sy values('Wednesday','Y.L.Talekar')");
mysql_query("insert into tt_sy values('Thursday','C.L.Shinde')");
mysql_query("insert into tt_sy values('Friday','R.A.Mestri')");

?>
