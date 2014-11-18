<?php

//$date ='2014/05/19';

//$day = date('l',strtotime($date));

//echo $day;
				//month date year
$date=date_create("05/19/2014");
$x=date_format($date,"Y/m/d ");
echo $x;
$day = date('l',strtotime($x));
echo $day;
$d=strrev("'$date'");
echo $d;
?>