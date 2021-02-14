<!-- Navbar -->
<?php

    session_start();
    $_SESSION['type'] = "admin";

?>
<!DOCTYPE html>

<html lang = "en">

    <head>
        <meta charset="utf-8">

        <!--Boostrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Styles-->


		<style>

		/* Font */
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap');

			.navbar {

				min-height: 60px;
				margin-bottom: 0 !important;
				padding-bottom:20px;
				border: 0;
				border-radius: 0;
				font-size: 14pt !important;
				font-family: 'Quicksand', sans-serif;
				font-weight: bold;
				letter-spacing: 1px; 
				display: block;
				background-color: #ffffff;
				

			}

			.main-logo {
				
				position:fixed;
				padding-left: 50px;
				padding-top: 0;
				top:0;
				
			}


			.navbar-right {

				list-style-type: none !important;
				padding-top: 20px;
				padding-right: 50px;

			}

			.navbar-right li a {

				padding-left: 30px;
				color: #00187a !important;
				

			}


			.navbar-nav li a:hover {

				color: #9f00e3  !important;
				text-decoration: none !important;
				transition:all .5s;

			}

		
	

		</style>

    </head>


    <body>
    <!-- Navbar -->
    <nav class = "navbar navbar-fixed-top">

      	<!-- Logo Heading -->
	    <a class="navbar-brand" href="admin-controlpanel.php">
		 	<div class=main-logo>
    			<img src="img/devslounge-admin.png" width="480" height="70" alt="logo">
			</div>
  		</a>

	
		<!-- Navbar Collapse -->
		<!--
       	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->

			<!--Navbar Contents-->
			<div class = "container-fluid">
				<ul class = "navbar-nav navbar-right">

					<!--PHP -->
					<?php

						// If logged in as admin 
						if(isset($_SESSION['type'])&& $_SESSION['type']=="admin") {

							echo  '<li class="nav-item"><a class="nav-link" href="admin-monitor-users.php">Users</a></li>
								<li class="nav-item"><a class="nav-link" href="admin-monitor-postings.php">Job Postings</a></li>
								<li class="nav-item"><a class="nav-link" href="admin-logout.php">Log Out</a></li>'; //add a button for this instead. 
						}
					
					?>
					
				</ul>
			</div>
        </nav>

	

    </body>
</html>
  