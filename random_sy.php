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
            <li class="current"><a href="t.php" class="m1">Home</a></li>
            <li><a href="edit.php" class="m2">Edit Profile</a></li>
            <li><a href="about.php" class="m4">About</a></li>
            <li><a href="table_sy.php" class="m3">Records</a></li>
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
        
        <h2>ROLL <span>CALLS</span></h2>
        
        <div class="img-box"><form method="post" action="random.php">
  <input type="submit" name="RNG" value="Select Roll Numbers" width="150px" height="50px" style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:20px;width:300px;margin-left:220px;"></form></div>
        <p class="p0">
        <?php

$names = array("1", "2", "3", "4", "5", "6", "7", "9", "10","12","14","15","16","17","18","21","23","28","30","31","32","34","35","36","37","39","41","42","43","44","45","46","48","49","50","51","52","53","54","57","60","61","62","63","66","67","68","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89","90","91","92","93","94","95","97","98") ;

// select some random elements from the array
$random_indices = array_rand($names, 3);

// output the indices of the random elements
//var_dump($random_indices);
$x=$names[$random_indices[0]];
$y=$names[$random_indices[1]];
$z=$names[$random_indices[2]];
// output the random elements
/*echo $names[$random_indices[0]];
echo "<br>";
echo $names[$random_indices[1]];
echo "<br>";
echo $names[$random_indices[2]];
echo "<br>";
echo "<br>";*/
//$x=3;
//$y=10;
$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
 mysql_select_db("update_activity_sy", $con);
 $rno=mysql_query("SELECT Rollno FROM update_sy");

while($fetch=mysql_fetch_array($rno))
{
	

 
 
 if($x==$fetch['Rollno'])
 	{
		$x=$x." "."alredy done!";
 	}
 	
 	if($y==$fetch['Rollno'])
 	{
			$y=$y." "."alredy done!";
 	}
	if($z==$fetch['Rollno'])
 	{
		$z=$z." "."alredy done!";
 	}
 	
}
echo "<center><div style ='font:40px/50px Arial,tahoma,sans-serif;color:#663399'>$x</div></center>";
echo "<center><div style ='font:40px/50px Arial,tahoma,sans-serif;color:#6633CC'>$y</div></center>";
echo "<center><div style ='font:40px/50px Arial,tahoma,sans-serif;color:#6633FF'>$z</div></center>"; 

?>

<p class="p0"><a href="f1_sy.php" class="m1"><h2>Upadate <span>Activity</span></h2></a></p>

        </p>
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
