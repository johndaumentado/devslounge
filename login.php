<!-- DevsLounge Login -->

<!DOCTYPE html>

<html lang = "en">

    <head>

        <title>
            Welcome to DevsLounge! 
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

        <link href = "style/logindesign.css" rel = "stylesheet" type = "text/css">
	
    </head>

	<body>

		<div id = "login">

	
			<div class = "heading">
				<center>	
					<img src="img/devslounge-logo.png" width="250" height="70" alt="logo">
				</center>
			</div>

			<form action="loginprocess.php" method="POST">
			
				<p>
					<label>Email</label>
					<input type="text" id="user" name="user"  placeholder="Enter your Email" />
				</p>
				<p>
					<label>Password</label>
					<input type="password" id="pass" name="pass"  placeholder="Enter your Password" />
				</p>
				<br>
				<p>
					<center><button type="submit"> Login </button>
				</p>

				<br/>
				<h4>
					Don't Have An Account Yet?
					<br /><a href="register.php">Click Here to Register!</a>
				</h4>
			</form>
		</div>

	

	</body>

</html>