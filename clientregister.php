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


	
			<!--Register Form--> 
			<form action="includes/clientRegProcess.php" method="POST">

				<div class="signup-form-form">
				<h1><p style="color:White">Client Sign Up</p></h1>
				<p style="color:White">Please fill in this form to create an account.</p>
				
				<p style="color:White"><label for="name"><b>What is the name of your Company/Business?</b></label>
				<input type="text" placeholder="Enter Company/Business" name="company" required>
					<br />
					
				<p style="color:White"><label for="name"><b>Full Name</b></label>
				<input type="text" placeholder="Enter Name" name="name" required>
				
				<p style="color:White"><label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
					
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				
				</p>

				<div class="clearfix">
					<button type="submit" class="signupbtn">Sign Up</button>
				</div>
				
				</div>
			</form>

		</div>
	</body>
</html>

