<!-- DevsLounge Login -->

<!DOCTYPE html>

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
			<form action="register.php" method="POST"> <!--register.php???-->

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
				<input type="password" placeholder="Enter Password" name="psw" required>

				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				
				</p>

				<div class="clearfix">
					<button type="submit" class="signupbtn"><a href="login.php">Sign Up</button>
				</div>
				
				</div>
			</form>

		</div>
	</body>
</html>

<!--PHP-->
  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
  $email = ($_POST['email']);
  $name = ($_POST['name']);
  $password = ($_POST['password']);
  $company = ($_POST['company']);

  $bool = true;
  include_once 'dbconnect.php'; //THIS IS TO CONNECT TO THE DB
  $query = "SELECT * from users";
  $results = mysqli_query($con, $query); //Query the users table
  while($row = mysqli_fetch_array($results)) //display all rows from query
  {
  $table_users = $row['email']; // the first email row is passed on to $table_users, and so on until the query is finished
  if($email == $table_users) // checks if there are any matching fields
  {
  $bool = false; // sets bool to false
  Print '<script>alert("email has been taken!");</script>'; //Prompts the user
  Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  }
  }
  if($bool) // checks if bool is true
  {
  mysqli_query($con, "INSERT INTO users (email, password) VALUES
  ('$email','$password')"); //Inserts the value to table users
  Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
  Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  }
  }
  ?>
