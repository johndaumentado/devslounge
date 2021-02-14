<!-- DevsLounge Register -->

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

		<style>

        /*Login CSS */
	
		/* Font Imports */
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

		body {

		background: linear-gradient(
			to right bottom,
			rgba(118, 102, 240, 1),
			rgba(90, 24, 154, 1)
		);

		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;

		}

        

		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			box-sizing: border-box;
		}


		/*Heading*/
		.heading {

			margin-bottom:20px;

		}


		/* Button Design */
		a {

			color:#fff;
			background-color: #8a00e6;
			padding: 20px;
			border-radius: 5px;
			width:100%;
			border: none;
			border-radius:50px;
			float:center;
			font-family:'Roboto', sans-serif;
			font-size:14pt;
		}

		a:hover{

            color:#fff;
			opacity: .8;
			transition:all .5s;
		}

		</style>
		


    </head>

	<body>

		<div id = "login">

	
			<div class = "heading">
				<center>	
					<img src="img/devslounge-logo.png" width="250" height="70" alt="logo">
				</center>
			</div>

	
				<center>
                <a href ="clientregister.php"> Register as Client </a>
				<br />
                <br />
                <a href ="devregister.php"> Register as Developer </a>
				<br />


		</div>

	</body>

</html>