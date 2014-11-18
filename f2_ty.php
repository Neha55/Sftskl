<html>
<head>
<html>
<head>
<link rel="stylesheet" type="text/css" href="n.css">
<script>

</script>
</head>

<body>
<?php
    	session_start();
		$u1=$_SESSION['u'];
		$_SESSION['rno']=$_POST['rollno'];
		$_SESSION['d1']=$_POST['date'];
		$r1=$_SESSION['rno'];
		//echo $r1;
		$date=$_SESSION['d1'];
		//echo $date;
		$xplod=explode('-',$date);
		//print_r($xplod);
		$string="$xplod[2]-$xplod[1]-$xplod[0]";
		//echo "<br/> $string";
		$day = date('l',strtotime($string));

		$con = mysql_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		//for teacher name- conducted by
		echo "<br>";
 		mysql_select_db("teacher", $con);
		$q="SELECT Name FROM T1 where Username='$u1'";
		$result=mysql_query($q);
		$r=mysql_fetch_array($result); 	
		
		//for teacher name- incharge
		//$jd=cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
		//$d=jddayofweek($jd,1);
		//echo $d;
		echo "<br>";
 		mysql_select_db("timetable_ty", $con);
		$q5="SELECT course_incharge FROM tt_ty where day='$day'";
		$result5=mysql_query($q5);
		$r5=mysql_fetch_array($result5); 
		
		//for student name
		mysql_select_db("ty", $con);
		$q2="SELECT Name FROM ty_class where Rollno='$r1'";
		$result2=mysql_query($q2);
		$r2=mysql_fetch_array($result2); 	
		
		//$time=$_SESSION['time'];
		//echo $time;

?>
<?php
	$u1=$_SESSION['u'];
	echo "you are logged in as"." ".$u1." ";?>

    

<div id="wrapper">

	<form name="Activity updates " class="login-form" action="update_activity_ty.php" method="post" onsubmit='return check_time()'>
	
		<div class="header">
		<h1>Activity updates</h1>
		<span>Fill out the form below information regarding activity details of student.</span>
		</div>
	
		<div class="content">
		Rollno<input name="rollno" type="number" class="input rollno" value="<?php echo  $r1; ?>"  style="margin-left:66px;" readonly/>
		<div class="roll-icon"></div>
		
		Student Name<input name="student_name" type="text" class="input name" placeholder="student name" value="<?php echo  $r2['Name'] . " "; ?>"style="margin-left:11px;" readonly />
		<div class="name-icon"></div>

		Topic Name<input name="topic_name" type="text" class="input topic" placeholder="Topic name" style="margin-left:27px;" required='required' />
		<div class="topic_icon" ></div>	
        
         Course I/C<input name="teacher_1" type="text" class="input t_name" value="<?php echo  $r5['course_incharge'] . " "; ?>" style="margin-left:35px;" readonly/>		<div class="teacher-icon" ></div>
	

      	 Conduct By<input name="teacher_2" type="text" class="input t_name" value="<?php echo  $r['Name'] . " "; ?>" style="margin-left:30px;" readonly/>
		<div class="teacher-icon"></div>
        
        
	
      	Date<input id="datepick3" size="50"  name="date" type="text" value="<?php echo  $date; ?>" class="input t_name" style="margin-left:76px;" readonly  />
        <div class="date-icon"></div>
		
		Time<input name="time" type="text" id="time" class="input t_name" placeholder="Time" value="08:00 AM" title="enter time" style="margin-left:76px;" readonly/>
		<div class="time-icon"></div>
        
        Remark <textarea name="remark" rows="5" cols="40" style="margin-left:115px; border-style: ridge"></textarea>	
        <div class="remark-icon"></div>
     
		</div>
    	<div class="footer">
		<input type="submit" name="submit" value="Update" class="button"  />
		
		</div>
	
	</form>

</div>
<div class="gradient"></div>

</body>

</html>