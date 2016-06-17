<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $fname = mysqli_real_escape_string($db,$_POST['firstname']);
      $lname = mysqli_real_escape_string($db,$_POST['lastname']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM Registration_details WHERE firstname = '$fname' and lastname = '$lname' and email = '$email' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("firstname");
         $_SESSION['login_user'] = $fname;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
last