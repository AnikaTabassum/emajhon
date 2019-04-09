<?php

$cn = mysqli_connect("localhost","root","","hackathon",3306);
if (!$cn)
{
	die("could not connect".mysql_error());
}
else
{
	//echo "connected to the server successfully";
}
//echo "<br>";

?>