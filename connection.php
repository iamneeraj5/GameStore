<?php
$dbhost="localhost:3306";
$dbuser="root";
$dbpass="";
$dbname="login";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect");
}

  ?>
