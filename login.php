<!-- DevsLounge Login -->

<!DOCTYPE html>

<html lang = "en">

    <head>

        <title>
            Welcome to DevsLounge 
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

		<div id="login">

			<form action="loginprocess.php" method="POST">
				<h2> DevsLounge </h2>
				<p>
					<label>Email:</label>
					<input type="text" id="user" name="user"  placeholder="Enter your Email..." />
				</p>
				<p>
					<label>Password:</label>
					<input type="password" id="pass" name="pass"  placeholder="Enter your Password..." />
				</p>
				<br>
				<p>
					<button type="submit"> Login </button>
				</p>
				<a href="register.php">Click Here to Register!</a>
			</form>
		</div>

	</body>

</html>