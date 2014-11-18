<?php
session_start();
if(!isset($_SESSION['u']))
{
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" media="screen, print, handheld" type="text/css" href="calendar.css" />
<script type="text/javascript" src="calendar.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    
    
    
    
    <div class="container">
    	<img src="images/Dept1.jpg" width="678" height="98">
 <?php
	$u1=$_SESSION['u'];
	echo "you are logged in as"." ".$u1." ";?>
   
      <div class="container">
   
        <nav>
          <ul>
            <li ><a href="t1.php" class="m1">Home</a></li>
            <li><a href="edit1.php" class="m2">Edit Profile</a></li>
            <li class="current"><a href="setting.php" class="m2">Settings</a></li>
            <li><a href="about1.php" class="m4">About</a></li>
           
            
            <li class="last"><a href="logout.php" class="m5">Logout</a></li>
          </ul>
        </nav>
      </div>
      <h1>&nbsp;</h1>
    </div>
  </header>
  <div class="container">
    <aside>
      <h3> <span>Calendar</span></h3>
      <script type="text/javascript">
            calendar();
       </script>
    </aside>
    <section id="content">
      
      <div class="inside">
        
        <h2>ADD USER</h2>
        
    <html>
<body>
<html>
<body>
<?php

if (isset($_POST['submit'])):
  $dbcnx = mysql_connect('localhost', 'root', '');
  mysql_select_db('teacher');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $pwd=$_POST['password'];
  $sql = "INSERT INTO t1 SET Name='$name', Username='$email' , Password = '$pwd'";
          
  if (@mysql_query($sql)) {
    echo('<p>New User added</p>');
  } else {
    echo('<p>Error adding new user: ' . mysql_error() . '</p>');
  }
?>

<p><a href="<?=$_SERVER['PHP_SELF']?>">Add another User</a></p>

<?php
  else: // Allow the user to enter a new author
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<p>Enter the new User:<br /><br />
Name: <input type="text" name="name" size="20" maxlength="255" style="margin-left:70px;" required="required"
  /><br /><br />
Username: <input type="text" name="email" size="20" maxlength="255" style="margin-left:42px;" required="required"
  /><br /><br />
Password: <input type="type" name="password" size="20" maxlength="255" style="margin-left:45px;" required="required"
  /><br /><br />

<input type="submit" name="submit" value="ADD" /></p>
</form>

<?php endif; ?>

</body>
</html>

        
      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
<div align=center></div></body>
</html>
