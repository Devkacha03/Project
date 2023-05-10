

<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

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
		
		span
		{
			font-size:30px;
			margin-top:5px;
		}
		
		.bor
		{
			/*border:solid 2px black;*/
			margin-top:20px;		
		}

		.but
		{
			height:60px;
			width:60%;
			border-radius:50px;
			margin-top:30%;
			margin-left:40px;
			filter:drop-shadow(9px 9px 50px red);
		}

		.im
		{
			filter:drop-shadow(9px 9px 30px blue);
			margin-top:5px;
			border:5px solid ;
		}
		
		.webbutton
		{
			height:60px;
			width:20%;
			border-radius:50px;
			margin-left:40%;
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
					<th style = "border-radius:10px;"> WELCOME </th>
				</tr>
			</thead>
		</table>
	</div>
	</div>

	<div class = "row">
		<div class = "col-12">
			<span><b>Welcome, <?php echo @$_SESSION['username']; ?></b></span>	
		</div>
	</div>
	
	<hr noshade >
	<div class = "row">
		<div class = "col-9 bor">
			<div class = "row">
				<div class = "col-12">
					<h2>Profile:</h2>
			</div>

			<hr>
			
			<div class = "row">
				<div class = "col-12">		
					<p><span >UserID:<?php echo @$_SESSION['id']; ?></span></p>
				</div>
			</div>
			<hr>

			<div class = "row">
				<div class = "col-12">		
					<p><span >City: <?php echo @$_SESSION['city']; ?></span></p>
				</div>
			</div>
			<hr>
			
			<div class = "row">
				<div class = "col-12">
					<p><span >Date Of Birth: <?php echo @$_SESSION['dob']; ?></span></p>
				</div>
			</div>
			<hr>
			
			<div class = "row">
				<div class = "col-12">
					<p><span>Email: <?php echo @$_SESSION['email']; ?></span></p>
				</div>
			</div>
			<hr>

			<div class = "row">
				<div class = "col-12">
					<p><span>Postal Code: <?php echo @$_SESSION['pin']; ?></span></p>
				</div>
			</div>
			<hr>
			
			<div class = "row">
				<div class = "col-12">
					<p><span>Mobile: <?php echo @$_SESSION['phoneno']; ?></span></p>
				</div>
			</div>
			<hr>
			
		</div>
		</div>
	
	<div class="col-3">
	
		<div class = "row">
			<div class = "col-12 ">
				<span><p align="center">Image:</p></span><br>
				<img src="<?php echo $_SESSION['picture']; ?>" height = 200 width = 200 alt="Uploaded Image"  class="im" style="margin-left:20px;">
			</div>
		</div>
		
		<hr>
		
		<div class = "row">
			<div class = "col-12">
				<input type = "submit" name = logout value = "LOGOUT" onclick = "alert('You have successfully logged out.')" class = "btn btn-outline-danger but">
			</div>
		</div>
	</div>
</div>

<div>
	<div class="row">
		<div class="col-12">
		
			<input type = "submit" value="Show Website" name="web" class = "btn btn-primary webbutton">
			
		</div>
	
	</div>
</div>	
	
	
	</div>
    </form>
</body>
</html>

<?php
    // Handle the logout functionality
    if (isset($_POST['logout'])) {
        // Unset all session variables
        session_unset();

        // Destroy the session
        session_destroy();

		setcookie('username', '', time() - 3600);
		setcookie('password', '', time() - 3600);

        // Redirect to the login page
        header('Location: loginPage.php');
        exit;
    }
	
	if(isset($_POST['web']))
	{
		header('Location: home.php');
		
		// Unset all session variables
        session_unset();

        // Destroy the session
        session_destroy();
	}
    ?>

	<script>
        // Invalidate the session when the window is closed
        window.addEventListener ('beforeunload', function() {
            <?php

            	session_unset();
            	session_destroy();

			?>
        });
    </script>