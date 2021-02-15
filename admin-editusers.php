
<html>
    
    <head>

        <title>
            
            Welcome!

        </title>

    <meta charset="utf-8">


    <!--boostrap-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!--styles-->

    <style type = "text/css">

        /* fonts */ 
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');



        /* body */

        body {

            color: #05668D;

        }

        /* top nav */
        .navbar {

            min-height: 20px;
            padding: 5px;
            margin-bottom: 0 !important;
            background-color: #02C39A;
            border: 0;
            border-radius: 0;
            font-size: 12pt !important;
            font-family: 'Roboto', sans-serif !important;
            letter-spacing: 1px; 
            display: block;

        }

        .navbar-right {

            list-style-type: none !important;

        }

        .navbar-nav li a {

            padding-left: 10px;
            padding-right: 10px;
            color: #FFFFFF !important;
            font-family: 'Roboto', sans-serif;

        }

        .navbar-nav li a:hover, .navbar-nav li.active a {

            color: #F0F3BD !important;
            text-decoration: none !important;
        }

        /* contents */

        .container {

            max-width: 100%;

        }

        .container-fluid {


        }

        .heading {

            background-color: #FFFFFF !important;
            padding: 30px;
            margin-left: 0 !important;
            margin-right: 0 !important;
            min-height: 60px;
            color: #028090;
            font-weight: bold ;
            font-size: 42pt;
            font-family: 'Roboto', sans-serif;

        }

        .welcome-name {

            padding-left: 10px;
            padding-right: 10px;
            color: #FFFFFF !important;
            font-weight: bold;
            font-family: 'Roboto', sans-serif;


        }

        .logout-link {

            color: #05668D;
            font-size: 16pt;
            font-family: 'Roboto', sans-serif;


        }


        .form-contents {

            padding-top: 10px;
            color: #05668D;
            font-size: 14pt;
            font-family: 'Roboto', sans-serif;


        }

        input[type = text] {

            width: 50%;
            padding: 6px;
            margin: 8px;
            box-sizing: border-box;
            border: 2px solid #7D8597;
            border-radius: 10px;
        }

        input[type = password] {

            width: 60%;
            padding: 6px;
            margin: 8px;
            box-sizing: border-box;
            border: 2px solid #7D8597;
            border-radius: 10px;
        }


        input[type = submit] {

            width: 20%;
            padding: 12px 20px;
            margin: 8px;
            border: none;
            color: #FFFFFF;
            font-size: 16pt;
            border-radius: 10px;
            background-color: #00A896;
        }

        input[type = checkbox] {

            width:20px;
            height: 20px;
            padding: 30px;
            margin: 20px;
            border: none;
            color: #FFFFFF;
            font-size: 16pt;
            border-radius: 10px;
            background-color: #028090;
        }

        .table-content {

            background-color: #F0F3BD;
            margin:10px;
            padding:10px;
        }



    </style>



    </head>

    <?php
        session_start(); //starts the session
        if($_SESSION['user']){ //checks if user is logged in
        }
        else{
        header("location:index.php "); // redirects if user is not logged in
        }
        $user = $_SESSION['user']; //assigns user value
        $id_exists = false;
    ?>

    <body>

        <!--Top Nav-->
          
        <!-- header -->

               
            <div class = "table-content">

                <div class = "text-center">
                
                    <!-- header for table -->
                    <h2><b> USERS </b></h2>


                    <!-- table -->
                    <table style = "background-color: #FFFFFF; width:100%; margin:auto; border: 3px solid #05668D;">
                        <tr style = "border: 3px solid #05668D;">
                            <th style = "text-align:center; padding:2px">ID</th>
                            <th style = "text-align:center; padding:20px">Name</th>
                            <th style = "text-align:center; padding:20px">Email</th>
                            <th style = "text-align:center; padding:20px">Password</th>
							<th style = "text-align:center; padding:20px">Type</th>
                        </tr>


    <?php

        if(!empty($_GET['user_id']))
        {
            $id = $_GET['user_id'];
            $_SESSION['user_id'] = $id;
            $id_exists = true;
			$conn = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
            $sql = "SELECT * from users WHERE user_id='$id'";
            $query = mysqli_query($conn, $sql); // SQL Query
            $count = mysqli_num_rows($query);

            if($count > 0)
            {
                while($row = mysqli_fetch_array($query))
                {
                    Print "<tr>";
                    Print '<td style = "text-align:center; padding:10px">'. $row['user_id'] . "</td>";
                    Print '<td style = "text-align:center; padding:10px">'. $row['name'] . "</td>";
                    Print '<td style = "text-align:center; padding:10px">'. $row['email']."</td>";
					Print '<td style = "text-align:center; padding:10px">'. $row['password']."</td>";
                    Print '<td style = "text-align:center; padding:10px">'. $row['type']. "</td>";
                    Print "</tr></table><br/>";
					$name = $row['name'];
					//$name = $row['name'];

                }
            }

            else
            {
                $id_exists = false;
            }
        }


        if($id_exists)
        {
            Print '<form action="admin-editusers.php" method="POST">
            Update Users: <br/>
            Name: <input type="text" name= "name" value="'. $name .'"/><br/>';            
            Print'<input type="submit" value="Update Users"/></form>';

        }

        else
        {
            Print '<h2 align="center">There is no data to be edited.</h2>';
        }

        ?>


    </body>

</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
		$conn = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
            $name = ($_POST['name']);
            $id = $_SESSION['user_id'];

            mysqli_query($conn, "UPDATE users SET name='$name' WHERE user_id='$id'");
            header("location: admin-monitorusers.php");
    }
?>