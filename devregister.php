<!--Dev Register-->

<html lang = "en">

    <head>

        <title>
            Client Register | DevsLounge
        </title>
        
        <meta charset="utf-8">

        <!--Boostrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Icon-->

        <link rel = "icon" href = "img/logo-icon.png"> 

        <!--Styles-->

        <link href = "style/registerdesign.css" rel = "stylesheet" type = "text/css">


	</head>

		
	<body>

		<!--Register Contents-->
		<div id = "register">

			<div class = "heading">
				<center>	
					<img src="img/devslounge-logo.png" width="250" height="70" alt="logo">
				</center>
			</div>
		
			<form action="includes/devRegProcess.php" method="POST">

				<h2>Developer Sign Up</h2>
				<h4>Please fill in this form to create an account.</h4>
				
				<label for="name">Full Name</label>
				<input type="text" placeholder="Enter Name" name="name" required>

				<br />
				
				<label for="email">Email</label>
				<input type="text" placeholder="Enter Email" name="email" id="email" required>

				<br />
					
				<label for="password">Password</label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<br />

				<label for="name">Which Programming Languages do you use?</label><br />
					<label>
					<input type="checkbox" name="language[]" value="HTML/CSS" />HTML/CSS<br />
					<input type="checkbox" name="language[]" value="PHP" />PHP<br />
					<input type="checkbox" name="language[]" value="C++" />C++<br />
					<input type="checkbox" name="language[]" value="Python" />Python<br />
					<input type="checkbox" name="language[]" value="Java" />Java<br />
					<input type="checkbox" name="language[]" value="C#" />C#<br />
					<br />

					</label>

			
				<center><button type="submit" class="signupbtn">Sign Up</button></center>
			
				
				</div>

			</form>
		
		</div>
	
	</body>
</html>

