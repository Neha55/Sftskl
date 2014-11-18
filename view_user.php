<html>
<body>
<h3><center><font color="#990033" size="20">User_Profiles</font></center></h3>
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">
<tr>

    <td width="33%" align="center"><b><font size="5">Name</font></b></td>
    <td width="33%" align="center"><b><font size="5">Username</font></b</td>
    <td width="33%" align="center"><b><font size="5">Password</font></b</td>
        </tr>
  
<?php
//$dbhost = 'localhost';
//$dbuser = 'local';
//$dbpass = 'database_password';
$con = mysql_connect("localhost","root","");

$dbname = 'teacher';
mysql_select_db($dbname);

$query = "SELECT * FROM t1";
$result = mysql_query($query);
?>
<tbody>
<?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
//echo "rno :{$row['rollno']} <br>" .
//"name : {$row['student_name']} <br>" . 
//"topic : {$row['topic']} <br><br>";

$name=$row['Name'];
$unm=$row['Username'];
$password=$row['Password'];


//mysql_close($conn);

?>

  <tr>
    <td width="33%" align="center"><?php {echo $name;}?></td>
    <td width="33%" align="center"><?php {echo $unm;} ?></td>
    <td width="33%" align="center"><?php {echo $password;} ?></td>
    
  </tr>

<?php
}
?>
</tbody>
</table>
</body>
</html>