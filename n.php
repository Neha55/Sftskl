<?php
$jd=cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
echo(jddayofweek($jd,1));
?>