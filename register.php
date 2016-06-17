<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Here</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
      .error 
      {
      	color: #FF0000;
      	font-size: 12px;
      }
    </style>
</head>
<body>
	<div id="main" class="jumbotron">  <!-- first div -->
		<img src="images/VLEAD_final_logo.png" class="img-rounded" alt="image not found" width="140" height="80"> 
		<img id="time" src="images/time4.jpeg" class="img-rounded" alt="image not found" width="60" height="50">
		<h1 id="header">Time Log</h1><br/><br/>
		<p id="caption">Time is precious...</p>
	</div> <!-- end of first div -->

	<div class="container" > <!-- second div -->
	<button id="homebtn" type="button" class="btn btn-primary" style="margin-right:10px" onclick="location.href='index.php'"><span class="glyphicon glyphicon-home"></span>Home</button>
	<form class="form-horizontal" role="form" method="post" action="connectreg.php">
	<h1 class="text-primary" style='font-family:"Comic Sans MS", cursive, sans-serif' align="center">Registration form</h1>
	<div class="form-group">
      <label class="control-label col-sm-5" for="email">First Name:<span class="glyphicon glyphicon-user"></span></label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="firstname" name="fname" placeholder="Enter firstname" required><span class="error"><?php echo $fnameErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="email">Last Name:<span class="glyphicon glyphicon-user"></span></label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="lastname" name="lname" placeholder="Enter lastname" required><span class="error"><?php echo $lnameErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="email">Email:<span class="glyphicon glyphicon-envelope"></span></label>
      <div class="col-sm-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required><span class="error"><?php echo $emailErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="pwd">Password:<span class="glyphicon glyphicon-lock"></span></label>
      <div class="col-sm-3">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required><span class="error"><?php echo $passwordErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="pwd">Re-Password:<span class="glyphicon glyphicon-lock"></span></label>
      <div class="col-sm-3">          
        <input type="password" class="form-control" id="re_pwd" name="re_pwd" placeholder="Enter password" required><span class="error"><?php echo $repasswordErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="pwd">Contact:<span class="glyphicon glyphicon-earphone"></span></label>
      <div class="col-sm-3">          
        <input type="text" class="form-control"  id="ctnt" name="contact" placeholder="Enter contact" maxlength="10" required><span class="error"><?php echo $contactErr;?></span>
      </div>
    </div>
    <div class="form-group" align="center">        
      <div class="col-sm-offset-4 col-sm-4">
        <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-save"></span>Submit</button>
      </div>
    </div>
  </form>
</div> <!-- end of second div -->
</body>
</html>
