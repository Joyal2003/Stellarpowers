<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "db_stellarpowers";
	$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn)
{
		echo "not connected";
}
?>