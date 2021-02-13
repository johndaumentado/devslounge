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
            Users | Control Panel 
        </title>
        <meta charset="utf-8">

        <!--Boostrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Icon-->

        <link rel = "icon" href = "title-icon.png"> -->

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
        
            }

        </style>

        



    </head>


    <body>

    <!-- Navbar -->

		<?php include('admin-nav.php'); ?>

            <h2 align="center">Users</h2>
            <table>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Post Time</th>
            <th>Edit Time</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
            
        <?php
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "devslounge";
            $conn = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName); //Connect to server

            $query = mysqli_query($conn, "Select * from list"); // SQL Query
            while($row = mysqli_fetch_array($query))
            {
                Print "<tr>";
                Print '<td align="center">'. $row['id'] . "</td>";
                Print '<td align="center">'. $row['details'] . "</td>";
                Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted']."</td>";
                Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
                Print '<td align="center"><a href="edit.php?id='. $row['id'] .'">edit</a> </td>';
                Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
                Print '<td align="center">'. $row['public']. "</td>";
                Print "</tr>";
            }
        ?>

        </table>
        
        <!--For Deleting Record-->
        <script>
            function myFunction(id)
            {
                var r=confirm("Are you sure you want to delete this record?");
                if (r==true)
                {
                    window.location.assign("delete.php?id=" + id);
                }
            }
        </script>


    </body>
</html>