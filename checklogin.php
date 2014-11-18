<?php

$tbl_name="t1";
$user="root";
$pass="";
$db_name = "teacher";
// Connect to server and select databse.
mysql_connect(localhost, $user, $pass)or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
 
// username and password sent from form
$username=$_POST['Username'];
$password=$_POST['Password'];

 

// To protect MySQL injection (more detail about MySQL injection)

$myusername = stripslashes($username);

$mypassword = stripslashes($password);

$uname = mysql_real_escape_string($myusername);

$pword = mysql_real_escape_string($mypassword);

//admin

$sql="SELECT * FROM $tbl_name WHERE username='$uname' and password='$pword'

and type='admin'";

$result=mysql_query($sql);

// Mysql_num_row is counting table row

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

 

//client

$sql_1="SELECT * FROM $tbl_name WHERE username='$uname' and password='$pword'

and type='user'";

$result_1=mysql_query($sql_1);

 

// Mysql_num_row is counting table row

$count_1=mysql_num_rows($result_1);

// If result matched $myusername and $mypassword, table row must be 1 row

 

if($count==1){

// Register cookie for admin

session_register("uname");

setcookie("user", $uname, time() + 7200);

setcookie("pass", $pword, time() + 7200);

setcookie("type", 'admin', time() + 7200);

setcookie("valid", "1", time() + 7200);

header("location:t1.php");

}else if($count_1==1){

// Register cookie for client

setcookie("user", $uname, time() + 7200);

setcookie("pass", $pword, time() + 7200);

setcookie("type", 'user', time() + 7200);

setcookie("valid", "1", time() + 7200);

header("location:t.php");

}

else {

setcookie("valid", "0", time() + 7200);

header("location:index1.php");

}

mysql_close();

?>
