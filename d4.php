<?php

mysql_connect("localhost","root","root");
mysql_select_db("teacher");

$rs=mysql_query("select * from t1");

while($r= mysql_fetch_array($rs))
  {
  	echo $r['Name'] . " " .$r['Username'] . " " . $r['Password'];
	echo "<br>";
  
	$n=$r['Username'];
	$p=$r['Password'];

    if(isset($_POST['Username']) && isset($_POST['Password']))
	{
	  $name=$_POST['Username'];
	  $pwd=$_POST['Password'];
		
		if($n==$name&&$p==$pwd)
		{
			echo "<br>";
			echo "logged in successfully.....";
		}
	}


  }

?>

