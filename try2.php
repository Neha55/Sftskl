<html>
<head>
<title>Delete a Record from MySQL Database</title>
</head>
<body>

<?php
if(isset($_POST['delete']))
{

$conn = mysql_connect('localhost','root','');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$username = $_POST['user'];

$sql ="delete from t1 where name = '".$username."'";

mysql_select_db('teacher');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Username</td>
<td><input name="user" type="text" id="emp_id"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>

