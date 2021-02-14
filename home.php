<!-- DevsLounge Home -->
<?php 
    //session_start();
    //$_SESSION['type']= "client";
?>
<!DOCTYPE html>

<html lang = "en">

    <head>

        <title>
            DevsLounge 
        </title>
        
        <meta charset="utf-8">

        <!--Boostrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Icon-->

        <!-- <link rel = "icon" href = "title-icon.png"> -->

        <!--Styles-->

        <link href = "style/home.css" rel = "stylesheet" type = "text/css">


    </head>



	<body>

		<!-- Navbar -->

		<?php include('navbar.php'); ?>

		<br />
		<br />
		<br />
		<br />


		<!--Home Contents-->

		<div class="container-fluid">

		<div class = "home-contents">

			<div class="row">

				<div class="col-lg-6">

					<!--Heading-->
					<div class = "container-fluid">

						<div class = "home-heading">

							<div class = "row"> 

								Welcome to DevsLounge!

							</div>
						</div>

					</div>

					<div class = "home-text">

					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					
					<br />
					<br />
					
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

					</div>                
				</div>


				<div class="col-lg-6">

					<img src="img/home.png" width="500" height="500" alt="logo">
				
				</div>
				
			</div>
		</div>

		</div>

		<br />
		<br />

		<!-- Featured Developers -->
		
		<h1 align="center">Featured Developers</h1>
		<br />


		<div class = "container">

			<div class = "row">
			
				<!--Developer 1-->
				<div class="col-sm">
					<div class="panel">

						<div class=panel-heading>

							<b>Joshua Perez</b>
							<br />
							Software Developer 
							<br />
							Php300.00/hour 

                    
                    </div>

						<div class=panel-body>
							Insert Skills here
						</div>

					</div>
				</div>


			</div>
		</div>

		<!--Footer-->
		<?php include('footer.php'); ?>

	</body>
</html>
