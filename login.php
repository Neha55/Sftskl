<?php
session_start();

//$_SESSION['u']=$_POST['Username'];

	//include("config.php");
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
 mysql_select_db("teacher", $con);
		
	
	
		$name = $_POST['Username'];
		$pwd = $_POST['Password'];
	

	
	$result = mysql_query("SELECT * FROM T1 where Username='$name' and Password='$pwd' ");
	
	$count=mysql_num_rows($result);
	
	
	
	echo $a;
	if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	//session_register("myusername");
	//session_register("mypassword");
	//$a=mysql_query("SELECT Password FROM T1 where Username='admin' ");
	 if($name=="admin" && $pwd=='admin@IT')
	{
		
		header("location:t1.php");
	}
	else
	{
	header("location:t.php");
	}
	$_SESSION['u']=$_POST['Username'];
	
	}
	else {
	header("location:index1.php");
}


//if($_REQUEST['Username']==Username && $_REQUEST['Password']==Password)
//{
//$_SESSION['Username'] = Username;
//$_SESSION['Password'] = Password;
//header("location:edit_view.php");
//}					 
	
// Check username and password match

						 
	 mysql_close($con);
	


?>
		

