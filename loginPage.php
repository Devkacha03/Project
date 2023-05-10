<?php

	session_start();
	
	// Connect to MySQL database
	$conn = mysqli_connect('localhost', 'root', '', 'website');

	if (isset($_POST['remMe'])) {
		// Set a cookie that expires in one week
		setcookie('username', $_POST['username'], time() + (7 * 24 * 60 * 60));
		setcookie('password', $_POST['password'], time() + (7 * 24 * 60 * 60));
	}

	if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
		$cUsername = $_COOKIE['username'];
		$cPassword = $_COOKIE['password'];

		$sql = "SELECT * FROM project1 WHERE username = '$cUsername' and pwd = '$cPassword'";
		$result = mysqli_query($conn, $sql);
	  
		if (mysqli_num_rows($result) > 0) {
		  	$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $_COOKIE['username'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['city'] = $row['city'];
    	    $_SESSION['dob'] = $row['dob'];
        	$_SESSION['email'] = $row['email'];
			$_SESSION['pin'] = $row['pin'];
    	    $_SESSION['phoneno'] = $row['phoneno'];
			$_SESSION['picture'] = $row['picture'];
			
			header('Location: welcomePage.php');
			exit();
		}
	  }
	  

	// Check if the form has been submitted
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Check if the username and password match an existing user in the database
		$sql = "SELECT * FROM project1 WHERE username='$username' AND pwd='$password'";
		$result = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($result);

		if ($num_rows == 1) {
			// Redirect to the welcome page
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $row['id'];
			$_SESSION['city'] = $row['city'];
    	    $_SESSION['dob'] = $row['dob'];
        	$_SESSION['email'] = $row['email'];
			$_SESSION['pin'] = $row['pin'];
    	    $_SESSION['phoneno'] = $row['phoneno'];
			$_SESSION['picture'] = $row['picture'];
			header('Location: welcomePage.php');
			exit();
		} else {
			?>
			<script>
				alert ("Invalid Username/Password");
			</script>
			<?php
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin = "anonymous">
		
	<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin = "anonymous"></script>
	
	<style>
				
		.container
		{				
			margin-top:20px;
			border-radius: 20px;
			background-color:#EEEEEE;
		}
		
		.a
		{
			font-size:300%;
			color:white;
           	font-family:Verdana;
		}
		
		.b
		{
			background-color: black;
            text-align: center;
        }
		
		label
		{
			margin-top:30px;
			font-size:20px;
		}

		.b1
		{
			margin-top:30px;
			margin-bottom:30px;
			margin-left:30px;
			width:20%;
			height:50px;
			border-radius:30px;
			filter:drop-shadow(9px 9px 25px blue);
		}
	
		.b2
		{
			margin-top:30px;
			margin-bottom:30px;
			margin-left:10px;
			width:20%;
			height:50px;
			border-radius:30px;
			filter:drop-shadow(9px 9px 10px red);
		}
		
		.che
		{
			height:30px;
			width:30px;
			
		}
	
		
	</style>
</head>
<body>

	<div class = "container">
	<form method = "post" action = "">
	<div class = "row">
	
	<div class = "col-12">
		<table class = "table" >
			<thead align = "center" class = "a" >
				<tr class = "b">
					<th style = "border-radius:10px;"> LOGIN </th>
				</tr>
			</thead>
		</table>
	</div>
	
	<div class = "row">
		<div class = "col-12">
			<div class = "form-group ">
	
			<div class = "form-group ">
				<label><b>Username:</b></label>
				<input type = "text" name = "username" id = "username" required class = "form-control" placeholder = "ENTER USERNAME" required onkeyup = "this.value = this.value.replace(/[^A-z]/, '')" style="border-radius:30px;">
			</div>

			<div class = "form-group">
				<label><b>Password:</b></label>
				<input type = "password" name = "password" id = "password" required class = "form-control" placeholder = "ENTER PASSWORD" style="border-radius:30px;">
			</div>

			<div class = "form-group">
				<input type = "checkbox" name = "remMe" class = "form-check-input che" style="margin-top:33px; margin-left:15px;">
				<label style="margin-left:15px;"><b>Remember Me</b></label>
			</div>

			<center>
				<input type = "submit" name = "submit" value = "LOGIN" class = "btn btn-outline-primary b1">
				<input type = "reset" name = "reset" value = "RESET" class = "btn btn-outline-danger b2">
			</center>

			<div class = "form-group">
			<center><a href = "registerPage.php">Create A New Account</a></center>
			</div>

	</form>
</body>
</html>

