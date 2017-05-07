<?php
  $host="librarydb.c5acs26g9zsx.us-west-2.rds.amazonaws.com";
  $user="homelibrary";
  $password="12345678";
  $dbname="library";
  $db=mysqli_connect($host,$user,$password,$dbname);
  if (!$db) {
   die('Could not connect: ' . mysql_error());
}
else
{
echo "Mysql Connected Successfully";
}

mysqli_close($db);
?>
