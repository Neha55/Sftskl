<?php
//$dbhost = 'localhost';
//$dbuser = 'local';
//$dbpass = 'database_password';
$con = mysql_connect("localhost","root","");

$dbname = 'update_activity_ty';
mysql_select_db($dbname);

$query = "SELECT * FROM update_ty";
$result = mysql_query($query);
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

}
//mysql_close($conn);

?>

<html>
<h3><center><font color="#990033" size="20">TY_Records</font></center></h3>
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">
  <tr>
    <td width="8%" align="center">Rollnp</td>
    <td width="15%" align="center">Student_name</td>
    <td width="14%" align="center">Topic</td>
    <td width="14%" align="center">Course_I/C</td>
    <td width="14%" align="center">Conducted_by</td>
    <td width="8%" align="center">Date</td>
    <td width="8%" align="center">Time</td>
    <td width="15%" align="center">Remark</td>
    </tr>
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
</table>
</html>