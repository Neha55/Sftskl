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
    echo('<p>New employee added</p>');
  } else {
    echo('<p>Error adding new employee: ' . mysql_error() . '</p>');
  }
?>

<p><a href="<?=$_SERVER['PHP_SELF']?>">Add another Author</a></p>

<?php
  else: // Allow the user to enter a new author
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<p>Enter the new employee:<br />
Name: <input type="text" name="name" size="20" maxlength="255"
  /><br />
Username: <input type="text" name="email" size="20" maxlength="255"
  /><br />
Password: <input type="text" name="password" size="20" maxlength="255"
  /><br />

<input type="submit" name="submit" value="SUBMIT" /></p>
</form>

<?php endif; ?>

</body>
</html>
