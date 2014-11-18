<?php
$raw="19/05/2014";
$xplod=explode('/',$raw);
print_r($xplod);
$string="$xplod[2]-$xplod[1]-$xplod[0]";
echo "<br/> $string";

$day = date('l',strtotime($string));

echo $day;
	

?>