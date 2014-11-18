<html>
<body>
<h3><center><font color="#990033" size="20">TY_Records</font></center></h3>
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">
<tr>

    <td width="8%" align="center"><b><font size="5">Rollno</font></b></td>
    <td width="15%" align="center"><b><font size="5">Student_name</font></b></td>
    <td width="14%" align="center"><b><font size="5">Topic</font></b></td>
    <td width="14%" align="center"><b><font size="5">Course_I/C</font></b></td>
    <td width="14%" align="center"><b><font size="5">Conducted_by</font></b></td>
    <td width="8%" align="center"><b><font size="5">Date</font></b></td>
    <td width="8%" align="center"><b><font size="5">Time</font></b></td>
    <td width="15%" align="center"><b><font size="5">Remark</font></b></td>
        </tr>
  
<?php
//$dbhost = 'localhost';
//$dbuser = 'local';
//$dbpass = 'database_password';
$con = mysql_connect("localhost","root","");

$dbname = 'update_activity_sy';
mysql_select_db($dbname);

$query = "SELECT * FROM update_sy";
$result = mysql_query($query);
?>
<tbody>
<?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
//echo "rno :{$row['rollno']} <br>" .
//"name : {$row['student_name']} <br>" . 
//"topic : {$row['topic']} <br><br>";

$rno=$row['rollno'];
$stu_nm=$row['student_name'];
$topic_nm=$row['topic'];
$teacher_1=$row['course_incharge'];
$teacher_2=$row['conducted_by'];
$d=$row['date'];
$t=$row['time'];
$remark=$row['remark'];


//mysql_close($conn);

?>

  <tr>
   <td width="8%" align="center"><?php {echo $rno;}?></td>
    <td width="15%" align="center"><?php {echo $stu_nm;} ?></td>
    <td width="14%" align="center"><?php {echo $topic_nm;} ?></td>
    <td width="14%" align="center"><?php {echo $teacher_1;} ?></td>
    <td width="14%" align="center"><?php {echo $teacher_2;} ?></td>
    <td width="8%" align="center"><?php {echo $d;} ?></td>
    <td width="8%" align="center"><?php {echo $t;} ?></td>
    <td width="15%" align="center"><?php {echo $remark;} ?></td>
    
  </tr>

<?php
}
?>
</tbody>
</table>
</body>
</html>