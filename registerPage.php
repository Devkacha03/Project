<?php

	session_start();
	// Connect to MySQL database
	$conn = mysqli_connect('localhost','root','','website');

	$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{8,}$/';
	$numPattern = '/^\d{0,10}$/';

	// Check if the form has been submitted
	if (isset($_POST['submit'])) {
	// Retrieve form data
	$username = $_POST['username'];
	$city = $_POST['city'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pin = $_POST['pin'];
	$phoneno = $_POST['phoneno'];

	$image = $_FILES['image']['name'];
    $target = "uploads/" . $username . "_" . $image;
   
	//regularexprestion
	if (preg_match($pattern, $password) && preg_match ($numPattern, $phoneno)){
		if($_POST['captcha'] == $_SESSION['captcha']){
			 move_uploaded_file($_FILES['image']['tmp_name'], $target);
			// Insert the user data into the database
			$sql = "INSERT INTO project1 (username, city, dob, email, pwd, pin, phoneno, picture) VALUES ('$username', '$city', '$dob', '$email', '$password', $pin, '$phoneno', '$target')";
			$result = mysqli_query ($conn, $sql);
		
			if ($result) {
				// Redirect to the login page
				header('Location: loginPage.php');
				exit();
			}
		}else{
			?>

			<script>alert('Captcha unsuccessful');</script>

			<?php
		}

	} else {
		?>

		<script>alert('Password or Mobile No. Requirements do not match');</script>

		<?php
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin = "anonymous">		

<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin = "anonymous"></script>
	
<style>
			
	.container
	{				
		margin-top:20px;
		margin-bottom:20px;
		border-radius:20px;
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
        text-align:center;
    }
	
	.d
	{
		margin-top:50px;
		margin-bottom:30px;
		margin-right:10px;
		width:30%;
		height:50px;
		border-radius:30px;
		filter:drop-shadow(9px 9px 15px green);
	}
	

	.e
	{
		margin-top:50px;
		margin-bottom:30px;
		margin-left:10px;
		width:30%;
		height:50px;
		border-radius:30px;	
		filter:drop-shadow(9px 9px 20px yellow);
	}

	label
	{
		margin-top:20px;
		font-size:20px;    
	}

	</style>
</head>

<body>
	
	<div class = "container">
	<form method = "post" action = "registerPage.php" enctype="multipart/form-data">
	<div class = "row">
	
	<div class = "col-12">
		<table class = "table" >
			<thead align = "center" class = "a" >
				<tr class = "b">
					<th style = "border-radius:10px;"> REGISTER </th>
				</tr>
			</thead>
		</table>
	</div>
	
	<div class = "row">
		<div class = "col-12">
			<div class = "form-group">
				<label><b>Enter Username:</b></label>
				<input type = "text" class = "form-control" placeholder = "ENTER YOUR USERNAME" name = "username" required onkeyup = "this.value = this.value.replace(/[^A-z]/, '')" style="border-radius:30px;">
			</div>

			<div class="form-group">
				<label><b>Enter City:</b></label>
        		<input type = "text" class = "form-control" placeholder = "ENTER YOUR CITY NAME" name = "city" onkeyup = "this.value = this.value.replace(/[^A-z]/, '')" style="border-radius:30px;">
			</div>

			<div class = "row">
				<div class= "col-6">
					<div class = "form-group">
						<label><b>Enter Date of Birth:</b></label>
						<input type = "date" class = "form-control" placeholder = "ENTER YOUR DATE OF BIRTH" name = "dob" onkeyup = "this.value = this.value.replace(/[^A-z]/, '')" style="border-radius:30px;">
					</div>
				</div>
				
				<div class = "col-6">
					<div class = "form-group">
						<label><b>Enter PIN Code:</b></label>
						<input type = "number" class = "form-control" placeholder = "ENTER YOUR PINCODE" name = "pin" required style="border-radius:30px;">
					</div>
				</div>
			</div>

			<div class = "form-group">
				<label><b>Enter Email:</b></label>
				<input type = "email" class = "form-control" placeholder = "ENTER YOUR EMAIL ADDRESS" name = "email" required style="border-radius:30px;">
			</div>

			<div class = "form-group">
				<label><b>Enter Password:</b></label>
				<input type = "password" class = "form-control" placeholder = "ENTER YOUR PASSWORD (MUST BE 8 CHARS WITH 1 UPPERCASE & 1 LOWERCASE CHAR, 1 NUMBER AND 1 SPECIAL CHAR)" name = "password" required style="border-radius:30px;">
			</div>

			<div class = "form-group">
				<label><b>Enter Profile Picture:</b></label>
				<input type = "file" class = "form-control" name = "image" required style="border-radius:30px;">
			</div>

			
			
			<div class = "form-group">
				<label><b>Mobile No:</b></label>
        		<input type = "number" class = "form-control" placeholder = "ENTER YOUR MOBILE NO. (MUST NOT BE MORE THAN 10 NUMBERS)" maxlength = "10" name = "phoneno" style="border-radius:30px;">
			</div>

			<div class = "form-group">
				<label><b>Enter Captcha:</b></label>
				<img src="captcha.php" alt="captcha image" style="height:30px;">
        		<input type = "text" class = "form-control" name = "captcha" style="border-radius:30px;" placeholder="ENTER YOUR CODE">
			</div>
		</div>
	</div>

	<div class = "row">
        <div class = "col-12">	
            <div class = "form-group" align = "center">
			<input type = "submit" onclick = "alert('Data has been successfully submitted.')" class = "btn btn-outline-success d" name = "submit" value = "REGISTER">
			<input type = "reset" onclick = "alert('Form has been successfully reset.')" class = "btn btn-outline-warning e" value = "RESET">
			</div>
		</div>
	</div>
	
	<b align="center" style="margin-top:20px;"><a href="loginPage.php">Already Have An Account ? Sign in</b>
	</form>

	<br><br>
</body>
</html>