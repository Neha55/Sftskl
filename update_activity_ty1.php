<?php
session_start();

$_SESSION['rno']=$_POST['rollno'];
$_SESSION['stu_nm']=$_POST['student_name'];
$_SESSION['topic_nm']=$_POST['topic_name'];
$_SESSION['teacher_1']=$_POST['teacher_1'];
$_SESSION['teacher_2']=$_POST['teacher_2'];
$_SESSION['d']=$_POST['date'];
$_SESSION['t']=$_POST['time'];
$_SESSION['remark']=$_POST['remark'];


$rno=$_SESSION['rno'];
$stu_nm=$_SESSION['stu_nm'];
$topic_nm=$_SESSION['topic_nm'];
$teacher_1=$_SESSION['teacher_1'];
$teacher_2=$_SESSION['teacher_2'];
$d=$_SESSION['d'];
$t=$_SESSION['t'];
$remark=$_SESSION['remark'];

//echo $rno;

	//include("config.php");
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
 mysql_select_db("update_activity_ty", $con);
	
	mysql_query("insert into update_ty values('$rno','$stu_nm','$topic_nm','$teacher_1','$teacher_2','$d','$t','$remark')");
	echo $stu_nm;
	//echo "data updated successfully....!!!";
	header("location:random1.php");

	
	//if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	//session_register("myusername");
	//session_register("mypassword");
	//header("location:t.php");
	//}
	//else {
	//header("location:index1.php");
//}

mysql_close($con);
	


?>
		

