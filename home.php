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

        <link rel = "icon" href = "logo-icon.png">

        <!--Styles-->

    	<link href = "style/home.css" rel = "stylesheet" type = "text/css">

		<style>

		/* Font Imports */
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

		.home-heading {

			font-size: 24pt !important;
			font-family: 'Quicksand', sans-serif;
			font-weight: bolder;
			text-align:center;
			background-color: #ffffff;
			color:#4338bc;
			padding-top:80px;

		}

		.home-contents {

			margin-top:10px;
			padding:50px;
		}


		.home-text {

			margin-top: 10px;
			padding-top:30px;
			padding-right:50px;
			position:absolute;
			text-align:justify;
			font-family: 'Roboto', sans-serif;
			color:#4e148c;
			font-size:14pt;

		}
		</style>

	

    </head>



	<body>

		<!-- Navbar -->

		<?php include('navbar.php'); ?>

		<br />
		<br />



		<!--Home Contents-->

		<div class="container-fluid">

			<div class = "home-contents">

				<div class="row">

					<div class="col-lg-6">

						<!--Heading-->
						<div class = "container-fluid">

							<div class = "row"> 

								<div class = "home-heading">


									Welcome to DevsLounge!

								</div>
							</div>

					
							<div class = "home-text">
							
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

							</div>    

						</div>

						<div class = "container-fluid">

							<div class = "row"> 

								<div class = "container-button">

									<a href = "jobpostings.php" class = "button">Browse For Jobs</a>

								</div>
							</div>
						</div>

					</div>


					<div class="col-lg-6">

						<img src="img/home.png" width="600" height="600" alt="home">
					
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
