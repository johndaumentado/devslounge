<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Logindesign.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="login">
		<form action="loginprocess.php" method="POST">
				<h2> DevsLounge </h2>
			<p>
					<label>Username:</label>
					<input type="text" id="user" name="user" required="required" placeholder="Enter your Username..." />
			</p>
            <p>
                     <label>Password:</label>
					<input type="password" id="pass" name="pass" required="required" placeholder="Enter your Password..." />
            </p>
			    <br>
			<p>
                    <button type="submit"> Login </button>
            </p>
                <br>
                <br>
			        <a href="register.php">Click Here to Register!</a>
		</form>
	</div>
</body>

</html>
