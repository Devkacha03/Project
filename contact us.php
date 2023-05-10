<html>
	<head>
		<title>𝔦𝔫𝔣𝔬𝔱𝔢𝔠𝔥</title>
	</head>
	

	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	
        <style>

          

        .er
			{
				background-color:rgb(142, 208, 238);
				
				border-radius:50px;
			}
			
			

		.op{
			background-color:rgb(114, 167, 228);
			}
			
			.a
            {
                
                margin-top: 20px;
            }
            label
            {
                margin-top: 20px;
            }

		.bu
        {
            margin-top: 30px;
        }

        .a
        {
            margin-top: 30px;
        }
		
		label
		{
			font-weight:bold;
		}
        </style>

<body>

    <div class="jumbotron text-center op" style="margin-bottom:0">
		<h1><b>𝔦𝔫𝔣𝔬𝔱𝔢𝔠𝔥</b></h1>
		<p>𝔸 𝕨𝕙𝕠𝕝𝕖 𝕊𝕠𝕝𝕦𝕥𝕚𝕠𝕟</p> 
	  </div>

	 
	
	<div class="container-fluid er">
	
		

		<nav class="navbar navbar-expand-sm ps-3 pe-3">
		
		
				<button class="navbar navbar-toggler" data-bs-toggle="collapse" data-bs-target="#xyz">
					<span class="navbar-toggler-icon"></span>
				</button>
		
			<div class="collapse navbar-collapse" id="xyz">
				<div class="navbar-nav">
					<a href="home.php" class="nav-link"><b>Home</b></a>
					<a href="about us.php" class="nav-link "><b>About Us</b></a>
					<a href="product.php" class="nav-link"><b>Product</b></a>	
					<a href="#" class="navbar navbar-brand nav-link active"><b>Contact us</b></a>
                    
					
				</div>
			</div>
		</nav>
	</div>

    <div class="container a">

        <div class="row">
            <div class="col-6">

               
                <h4><img src="https://cdn-icons-png.flaticon.com/128/3771/3771436.png" style="height:10%;"> BY PHONE </h4>
					(Monday to Friday, 9am to 6pm PST)<br>
						West Gujrat Toll-Free:+91 7043510120
						<br>
						<br>
                  
                        
                      <h4><img src="https://cdn-icons-png.flaticon.com/128/9068/9068642.png" style="height:10%;"> BY E-MAIL</h4>
                    <p >
                    devkacha90@gmail.com<br>
                    dkacha03@gmail.com
                    </p>
                
                    <br>
               
                    <h4><img src="https://cdn-icons-png.flaticon.com/128/854/854878.png" style="height:10%;"> LOCATION</h4>
                    <p > 
                        infotech, <br>
                        airport road,<br>
						Rajkot<br>
                        pin code:-360007<br>
                    
                    </p>
                   
            </div>
            

            <div class="col-6" style="margin-top:5%;">
                <form>
                <div class="form-group">
                    <label>Enter Name:</label>
                    <input type="text" class="form-control" placeholder="ENTER YOUR NAME" required onkeyup="this.value = this.value.replace(/[^A-z]/, '')">
                </div>
            
                
                
                <div class="form-group">
                    <label>Enter Phone.No:</label>
                    <input type="text"   maxlength="10" name="PN"  class="form-control"  placeholder="ENTER YOUR PHONE NUMBER" required >
                </div>

                <div class="form-group">
                    <label>Enter Gmail:</label>
                    <input type="email"  name="GM" class="form-control" placeholder="ENTER YOUR GMAIL" required >
                </div>
            
                
                <div class="form-group">
					<label>Message:</label>
					<textarea class="form-control"></textarea>
				
				</div>

                
                        <div class="form-floating">
                            <input type="submit" onclick="alert('YOUR FORM SUBMITTED')" class="btn btn-outline-Success bu">
                            <input type="reset" onclick="alert('YOUR FORM DATA IS CLEAR')" class="btn btn-outline-danger bu" >
                        </div>
                
            </div>

        </div>

    </div>
    </form>
</body>
</html>
