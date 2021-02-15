<!--Client Register-->

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

				<h2>Client Sign Up</h2>
				<h4>Please fill in this form to create an account.</h4>
				
				<br />
					
				<label for="name">What is the name of your Company/Business?</label>
				<input type="text" placeholder="Enter Company/Business" name="company" required>
				
				<br />
						
				<label for="name">Full Name</label>
				<input type="text" placeholder="Enter Name" name="name" required>
					
				<br />

				<label for="email">Email</label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<br />

				<label for="psw">Password</label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<br />
				
				<center><button type="submit">Sign Up</button>
			
		
			</form>

		</div>
	</body>
</html>

