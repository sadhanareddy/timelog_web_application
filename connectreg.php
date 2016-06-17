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

//Create table
// $sql = "CREATE TABLE Registration_details (
// id INT AUTO_INCREMENT PRIMARY KEY, 
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50) NOT NULL,
// password VARCHAR(50) NOT NULL,
// Re_entered_password VARCHAR(50) NOT NULL,
// contact VARCHAR(50) NOT NULL,
// reg_date TIMESTAMP
// )";
// mysqli_select_db('time_log_app');
// if (mysqli_query($conn, $sql) {
//     echo "Table Registration_Details created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

//variables set to empty values
$fnameErr = $lnameErr = $emailErr = $passwordErr = $repasswordErr = $contactErr = "";
$fname = $lname = $email = $password = $repassword = $contact = "";

//form validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["fname"])) {
     $fnameErr = "firstname is required";
   // } elseif ($_POST["firstname"] == $_POST["lastname"]) {
   // 	 $lnameErr = "already entered in firstname";
   // 	} 
     else {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
       $fnameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["lname"])) {
     $lnameErr = "lastname is required";
   // } elseif ($_POST["lastname"] == $_POST["firstname"]) {
   // 	 $lnameErr = "already entered in firstname";
   // } 
     else {
     $lname = test_input($_POST["lname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
       $lnameErr = "Only letters and white space allowed"; 
     }
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
   
   if (empty($_POST["password"])) {
     $passwordErr = "password is required";
     else {
     $password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     if (strlen($_POST["password"]) < 8) {
       $passwordErr = "Password is weak"; 
     }

    
     if (empty($_POST["re_pwd"])) {
     $repasswordErr = "Re-Enter the password";
     else {
     $repassword = test_input($_POST["re_pwd"]);
     // check if name only contains letters and whitespace
     if (!$_POST["password"])) {
       $repasswordErr = "Password is incorrect"; 
     }

     if (empty($_POST["contact"])) {
     $contactErr= "Contact is required";
     else {
     $contact = test_input($_POST["contact"]);
     // check if name only contains letters and whitespace
     if((preg_match("/[^0-9]/", '', $contact)) && strlen($contact) == 10){
       $contactErr = "Only numbers are allowed"; 
     }
   }

 //   if (empty($_POST["password"])) {
 //     $passwordErr = "Password is required";
 //   } elseif( strlen($_POST["password"]) < 8 ) {
 //   	$passwordErr = "Password too short! ";
 //   } elseif( strlen($_POST["password"]) > 20 ) {
	// $passwordErr = "Password too long!";
 //   } else(strlen($_POST["password"]) > 8){
 //   	 $contact = test_input($_POST["contact"]);
 //   }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

//inserting values into database table
mysqli_select_db('time_log');
$sqlt = "INSERT INTO Registration_details ( firstname, lastname, email, password, Re_entered_password, contact) 
   values('$fname', '$lname', '$email', '$password', '$repassword', '$contact')";
$retval = mysqli_query( $sqlt, $conn );
if(! $retval) 
{
    die('Could not enter data: ' . mysqli_error());
	//echo error.html;
}
echo "Entered data successfully\n";
//echo congrats.html;
mysqli_close($conn);
?>

