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
    <div class="container"> <img src="images/Dept1.jpg" width="678" height="98">
      <?php
	$u1=$_SESSION['u'];
	echo "you are logged in as"." ".$u1." ";?>
   
      <div class="container">
        <nav>
          <ul>
            <li ><a href="t.php" class="m1">Home</a></li>
            <li class="current"><a href="edit.php" class="m2">Edit Profile</a></li>
            <li><a href="about.php" class="m4">About</a></li>
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
        
        <h2>EDIT <span>YOUR <span>PROFILE</span></span></h2>
        
         <nav>
        <p class="p0"><li class="current"><a href="edit_view.php" class="m1">View Profile</a></li></p>
        <p class="p0"><li class="current"><a href="edit_pwd.php" class="m1">Change Password</a></li></p>
        </n
      ></div>
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
