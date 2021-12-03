<?php
$hostname="aa1s3tjurcz7qh3.cjobsuyviyes.ap-south-1.rds.amazonaws.com" ; //local server name default localhost
$username="AnanyaAg";  //mysql username default is root.
$password="Mrawyad...16";       //blank if no password is set for mysql.
$database="aa1s3tjurcz7qh3";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?
