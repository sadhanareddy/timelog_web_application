<?php
$servername = "localhost";
$username = "root";
$password = "root";
//Create Connection to database
$conn = mysqli_connect('localhost', 'root', 'root');
if (!$conn)
{
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';

//Create database
$sql = "CREATE DATABASE time_log";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
// sql to create table
$sqlt = "CREATE TABLE Employee_details (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
re_password VARCHAR(50) NOT NULL,
contact VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";
mysqli_select_db($conn,'time_log');

if (mysqli_query($conn, $sqlt)) {
    echo "Table Employee_details created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
// define variables and set to empty values
$fname = $lname = $email = $password = $re_password = $contact = "";
$fnameErr = $lnameErr = $emailErr = $passwordErr = $re_passwordErr = $contactErr = "";

//form validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["fname"])){
		$fnameErr = "First name is required";
		echo "hello";
	}
	else{
		echo "hello";
	}

}

mysqli_close($conn);
?>

