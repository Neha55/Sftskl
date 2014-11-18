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
<link href="css/nsa.css" rel="stylesheet" type="text/css" />
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
            <li><a href="setting.php" class="m2">Settings</a></li>
            <li class="current"><a href="about1.php" class="m4">About</a></li>
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
      <div id="banner">
        <h2>Softskill Muster <span> Management <span>Move forward <span>with your education</span></span></span></h2>
      </div>
      <div class="inside">
        
        <h2>Muster <span>Activities</span></span></h2>
      <div class="headerpart" >
		<span><img src="images/icon1.png"></span>
            <h4>About Muster Manager</h4>
            <p>This muster manager will be useful to store and update daily softskill activity record conducted in each class on server, which was a manual work previously.</p>
            
            <span><img src="images/icon2.png"></span>
            <h4>Random Number Generator</h4>
            <p>This will generate three random numbers for each class. The purpose behind geenerating three numbers is that, if any student is absent , the other numbers can be called for activity.</p>
            
            <span><img src="images/icon3.png"></span>
            <h4>Storing and Updations</h4>
            <p>This will give a form in which the details of daily activity will be filled and stored into database.</p>
          
    
  </div>
</div>
        
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
