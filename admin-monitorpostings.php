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
            Job Postings | Control Panel 
        </title>
        
        <meta charset="utf-8">

        <!--Boostrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Icon-->

        <link rel = "icon" href = "img/logo-icon.png"> -->

        <!--Styles-->

        <style>


            table {

                padding:30px;
                margin:10px;
                width:90%;
                border: 3px solid #0a0c24;
                text-align:center;
            }

            th {

                font-size:20pt;
                font-weight:bold;
                border: 3px solid #0a0c24;
                padding:10px;

            }

            td {

                font-size:16pt;
                font-weight:bold;
                border: 3px solid #0a0c24;
                text-align:center;
                margin:10px;

            }

        </style>

        



    </head>


    <body>

    <!-- Navbar -->

		<?php include('navbar.php'); ?>

        <br />
        <br />
        <br />

            <h2 align="center">Job Postings</h2>
            <center>
            <table>
                <tr>
                    <th style="text-align:center;">Job ID </th>
                    <th style="text-align:center;">Title</th>
                    <th style="text-align:center;">Description</th>
                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">Skill ID</th>
                    <th style="text-align:center;">Delete</th>
                </tr>
            
        <?php
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "devslounge";
            $conn = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName); //Connect to server

            $query = mysqli_query($conn, "Select * from job_postings"); // SQL Query
            while($row = mysqli_fetch_array($query))
            {
                Print "<tr>";
                Print '<td align="center" style = "padding:10px;">'. $row['job_id'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['title'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['description'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['status'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['skill_id'] . "</td>";
                print '<td align="center"><a onclick="myFunction(' . $row['job_id'] . ')">Delete</a> </td>';
                Print "</tr>";
            }
        ?>

        </table>
        
        
        <script>
        /*
            function myFunction(id)
            {
                var r=confirm("Are you sure you want to delete this record?");
                if (r==true)
                {
                    window.location.assign("delete.php?id=" + id);
                }
            }
            */
        </script>


    </body>
</html>