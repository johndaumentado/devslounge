<!-- Control Panel -->

<?php 

    //session_start(); // starts the session

    /*if($_SESSION['admin']){ //checks if user is logged in
    }
    else{
    header("location:login.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value ??
    */
?>

<!DOCTYPE html>

<html lang = "en">

    <head>

        <title>
            Control Panel 
        </title>

    
        <meta charset="utf-8">

        <!--Boostrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Icon-->

        <link rel = "icon" href = "logo-icon.png"> -->

        <!--Styles-->

        <style> 

        .container-buttons {

            margin-top:300px;
        }

        a.button {

            padding:200px;
            border: 1px solid #ffff;
            border-radius:30px;
            text-align:center;
            background-color:#7359c9;
            font-size:30pt;
            color:#ffff;
            
        }

        a.button:hover {

            
            padding:200px;
            border-radius:30px;
            text-align:center;
            background-color:#7359c9;
            font-size:30pt;
            color:#0a0c24;
            text-decoration:none !important;

        }
        


        </style>

        



    </head>


    <body>

    <!-- Navbar -->

		<?php include('admin-nav.php'); ?>

        <br />
        <br />
        <br />
        <br />

        <center>
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6">

                    <div class = "container-buttons">
                        <a href = "admin-monitorusers.php" class = "button">Developers</a>
                    </div>
                    
                </div>

                <div class="col-lg-6">

                <div class = "container-buttons">
                        <a href = "admin-monitorpostings.php" class = "button">Job Postings</a>
                    </div>
                </div>
                        
                
                    
            </div>
           

        </div>

           

    </body>
</html>