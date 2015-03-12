<center>
<?php
$hostname="localhost"; //local server name default localhost
$username="harddrop";  //mysql username default is root.
$password="ZzYTffCAO9R";       //blank if no password is set for mysql.
$database="tutelage";  //database name which you created
$con=mysql_connect($hostname,$username,$password);

if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
//echo "System Message: Database connection established";
//echo "<br/>";
?>
</center>
