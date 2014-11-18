<?php
$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
 mysql_select_db("update_activity", $con);
 $rno=mysql_query("SELECT Rollno FROM update_ty");
 //echo $arr[0];
 //echo $arr[1];
 //echo $arr[2];
 
 while($f=mysql_fetch_array($rno))
 {
 	echo $f['Rollno']."<br>";
	$arr=array($f['Rollno']);
 }

 $i=0;
 //$a=array(1,2,3);
 
 for($i=0;$i<3;$i++)
 {
	echo $arr[$i];
	
 }



?>