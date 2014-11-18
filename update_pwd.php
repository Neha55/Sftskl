<?php
	if(isset($_POST['Username']) && isset($_POST['Password']))
	{
	  $name=$_POST['Username'];
	  $pwd=$_POST['Password'];
	 
	
	  $flg=0;
	  
	  $con = mysql_connect("localhost","root","");
	  if (!$con)
	  {
		die('Could not connect: ' . mysql_error());
	  }
	
	  mysql_select_db("teacher", $con);
	  
	  $result = mysql_query("SELECT * FROM T1 WHERE Username='".$name."'");
	  
	  if(!$result)
	  {
		  die('student does not exist with given name and rollno ' . mysql_error());
	  }
	  
	  while($row = mysql_fetch_array($result))
	  {
		  $sql = "UPDATE t1 SET Password='".$pwd."' WHERE Username = '".$name."'";
		  $retval = mysql_query( $sql, $con );
		  if(! $retval )
		  {
			die('Could not update data: ' . mysql_error());
		  }
		  echo "Updated data successfully\n";
		 	  
		  
	  }
	 
	 
	  mysql_close($con);
	}
	
?>