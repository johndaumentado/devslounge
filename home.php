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

        <link href = "style/styles.css" rel = "stylesheet" type = "text/css">


    </head>



	<body>

		<!-- Navbar -->

		<?php include('navbar.php'); ?>


		
		<!-- Home Contents -->

		<!-- Jumbotron Image -->

		<div class="container-fluid">

			<img src="img/placeholderIMG.png" alt="Home Image" style="width:100%;">

			<div class="centered">

				<h1>Placeholder Text</h1> above Placeholder Image

			</div>


		</div>
		
		<br/>


		<!-- Featured Developers -->
		
		<h1 align="center">Featured Developers</h1>
		<br />


		<div class = "container">

			<div class = "row">
			
				<!--Developer 1-->
				<div class="col-sm">
					<div class="panel">

						<div class=panel-heading>
							<img src = "img/sample-dev.png" alt="Perez-dev" />
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

				<!--Developer 2-->
				<div class="col-sm">
					<div class="panel">

						<div class=panel-heading>
							<img src = "img/sample-dev.png" alt="Perez-dev" />
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

				<!--Developer 1-->
				<div class="col-sm">
					<div class="panel">

						<div class=panel-heading>
							<img src = "img/sample-dev.png" alt="Perez-dev" />
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

	</body>
</html>
