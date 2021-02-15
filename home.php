<!-- DevsLounge Home -->

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

        <link rel = "icon" href = "img/logo-icon.png">

        <!--Styles-->

    	<link href = "style/home.css" rel = "stylesheet" type = "text/css">


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

									<br />
							
									<h4 style = "font-size:14pt;color:#3c096c;">
										A developer's remote lounge at home. 
									</h4>

								</div>
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

		<!--Heading-->
		<h1 style =" font-size: 24pt !important;font-family: 'Quicksand', sans-serif;font-weight: bolder;
        text-align:center;background-color: #ffffff;
        color:#4338bc; padding-bottom:30px;">
		Featured Developers
		</h1>
		<br />




		<div class = "container">
		<center>

			<div class = "row">

				<?php

					//For adding contents to table
					include_once 'includes/dbconnect.php'; // connect to server 

					$sql = "SELECT name,email FROM users WHERE type LIKE 'dev'";
					$result = $conn->query($sql);

					// resut per dev
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {

							echo '<div class="col-sm-4">
								<div class="panel">

									<div class=panel-heading>';

										echo '<h2>' . $row['name'] . '</h2>'; 
										echo  '<h4>' . $row['email'] . '</h4>';

							
									echo '</div>

									</div>
							</div>';

						}

					} 
					
						else {
								echo "0 results";
							}

					

						

				?>


			</div>
		</center>
		</div>

		<!--Footer-->
		<?php include('footer.php'); ?>

	</body>
</html>
