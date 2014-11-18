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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      <div class="container">
   		<nav>
          <ul>
            <li><a href="t.php" class="m1">Home</a></li>
            <li><a href="edit.php" class="m2">Edit Profile</a></li>
            <li><a href="about.php" class="m4">About</a></li>
            <li class="current"><a href="history_ty.php" class="m3">Records</a></li>
            <li class="last"><a href="logout.php" class="m5">Logout</a></li>
          </ul>
        </nav>
      </div>
      <h1>&nbsp;</h1>
    </div>
  </header>
  <div class="container">
       <section id="content">
            <div class="inside">
        <center><h2>history</h2></center>
        <div class="headerpart" >
        
        <?php
    	//session_start();
		//$u1=$_SESSION['u'];
		$con = mysql_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		//echo "<div style ='font:15px/15px Arial,tahoma,sans-serif;color:#500000'>Name</div>";
		echo "<br>";
 		mysql_select_db("update_activity_ty", $con);
		$q="SELECT * FROM update_ty";
		$result=mysql_query($q);
		while($r=mysql_fetch_array($result, MYSQL_ASSOC))
		{
			$rno=$r['rollno'];
			$stu_nm=$r['student_name'];

			echo  "<a href=\"table.php\" target=\"_blank\">DETAILS</a>"; ;
	
		}
		
    	?>
        <html>
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">
  <tr>
    <td width="8%" align="center" style="size:20px">Rollno</td>
    <td width="15%" align="center" style="size:20px">Student_name</td>
    
    </tr>
  <tr>
    <td width="8%" align="center"><?php {echo $rno;}?></td>
    <td width="15%" align="center"><?php {echo $stu_nm;} ?></td>
      </tr>
</table>
</html>
      
        
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
