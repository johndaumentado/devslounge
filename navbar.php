<!-- Navbar -->

<?php

    //session_start();
    //$_SESSION['type'] = "client";

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

        <link href = "style/nav-footer.css" rel = "stylesheet" type = "text/css">


	

    </head>



    <body >

    <!-- Navbar -->
    <nav class = "navbar navbar-fixed-top">

      	<!-- Logo Heading -->

	 	<a class="navbar-brand" href="#">

    		<img src="img/devslounge-logo.png" width="210" height="60" alt="logo">

  		</a>
		

		<!-- Navbar Collapse -->
       	<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->

			<!--Navbar Contents-->

			<div class = "container-fluid">
				
				<ul class = "nav navbar-nav navbar-right">
				

					<!--PHP -->
					<?php

						// If logged in as admin 
						if(isset($_SESSION['type'])&& $_SESSION['type']=="admin") {

							echo  '<li class="nav-item"><a class="nav-link" href="#">Control Panel</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Job Postings</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Log-out</a></li>'; //add a button for this instead. 
						}
						
						// If logged in as Developer or Client
						else if(isset($_SESSION['type'])&& ( $_SESSION['type']=="developer" || $_SESSION['type']=="client" )) {

							echo  '<li class="nav-item"><a class="nav-link" href="#">Job Postings</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Log Out</a></li>'; //add a button for this instead. 
						}
						
						// User is not logged in (default navbar upon entering home page)
						else {

							echo  '<li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Log In</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Register</a></li>';
						}
					?>
					
				</ul>
				
			</div>



    </nav>

    </body>
</html>
  
