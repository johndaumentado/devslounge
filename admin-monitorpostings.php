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
                    <th>Job ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Skill ID</th>
                    <th>Delete</th>
                </tr>
            
        <?php
            include_once 'includes/dbconnect.php'; //Connect to server
            $query = mysqli_query($conn, "Select * from job_postings"); // SQL Query
            while($row = mysqli_fetch_array($query))
            {
                Print "<tr>";
                Print '<td align="center" style = "padding:10px;">'. $row['job_id'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['title'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['description']."</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['status']."</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['skill_id']."</td>";
                Print '<td align="center" style = "padding:10px;"><a onclick="myFunction('.$row['job_id'].')">delete</a> </td>';
                Print "</tr>";
            }
        ?>

        </table>
        
        <!--For Deleting Record-->
        <script>
            function myFunction(job_id)
            {
                var r=confirm("Are you sure you want to delete/edit this record?");
                if (r==true)
                {
                    window.location.assign("deletejobadmin.php?job_id=" + job_id);
                }
            }
        </script>
    </body>
</html>