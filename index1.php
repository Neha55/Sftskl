<?php
session_start();
if(isset($_SESSION['u']))
{
		header("Location: t.php");
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="form3.css">
<style> 
body
{
background:url("main.jpg");
background-size:1500px 700px;
background-repeat:no-repeat;
padding-top:40px;
}
</style>
<b><font size="10">
<div> 
  <div align="left">Department Of Information Technology</div>
</div>
</font></b>
<hr></hr>
 

<br></br>
<br></br>


</head>


<center>

  <div class="loginerrors">
    <p><a id="loginerrormessage" class="accesshide" href="index.php" ><font size="4" >Invalid login, Please try again</font></a><span class="error"></span><a class="accesshide" href="index.php"><img src="alert.jpg" width="30" height="30"></a></p>
</div></center>      


<div class="login">
	<h1>Login</h1>
    <form method="post" action="login.php">
    	<input type="text" name="Username" placeholder="Username" required="required" />
        <input type="password" name="Password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Log in</button>
    </form>
</div>
</center>
    

</body>
</html>