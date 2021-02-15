<!-- Control Panel -->

<?php 

    session_start(); // starts the session
    if($_SESSION['type']=="admin"){ //checks if user is logged in
    }
    else{
    header("location:login.php"); // redirects if user is not logged in
    }
?>

<!DOCTYPE html>

<html lang = "en">

    <head>
        
        <title>
            Users | Control Panel 
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
                text-align:center;
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
            <br>


            <h2 align="center">Users</h2>
            <center>
            <table>
            <tr>
            <th style="text-align: center;">Name</th>
            <th style="text-align: center;">Email</th>
            <th style="text-align: center;">Password</th>
            <th style="text-align: center;">Type</th>
            <th style="text-align: center;">Edit</th>
            <th style="text-align: center;">Delete</th>
            </tr>
            
        <?php
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "devslounge";
            $conn = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName); //Connect to server

            $query = mysqli_query($conn, "Select * from users"); // SQL Query
            while($row = mysqli_fetch_array($query))
            {
                Print "<tr>";

                Print '<td align="center">'. $row['name'] . "</td>";
                Print '<td align="center">'. $row['email']. "</td>";
                Print '<td align="center">'. $row['password']. "</td>";
                Print '<td align="center">'. $row['type']. "</td>";
				print '<td align="center"><a href="edit.php" onclick="myFunction(' . $row['user_id'] . ')">Edit</a> </td>';
				print '<td align="center"><a onclick="myFunction(' . $row['user_id'] . ')">Delete</a> </td>';
                Print '<td align="center"; style = "padding:10px;">'. $row['user_id'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['name'] . "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['email']. "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['password']. "</td>";
                Print '<td align="center" style = "padding:10px;">'. $row['type']. "</td>";
				print '<td align="center" style = "padding:10px;"><a href="edit.php" onclick="myFunction(' . $row['user_id'] . ')">Edit</a> </td>';
				print '<td align="center" style = "padding:10px;"><a onclick="myFunction(' . $row['user_id'] . ')">Delete</a> </td>';

                Print "</tr>";
            }
        ?>

        </table>
        
        <!--For Deleting Record-->
        <script>
            function myFunction(user_id)
            {
                var r=confirm("Are you sure you want to delete/edit this record?");
                if (r==true)
                {
                    window.location.assign("delete.php?user_id=" + user_id);
                }
            }
        </script>


    </body>
</html>
