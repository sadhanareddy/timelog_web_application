<?php
$servername = "localhost";
$username = "root";
$password = "root";

//Create connection

$conn = mysql_connect('localhost', 'root', 'root');
if (!$conn) 
{
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';






//insert values into table;
?> 
