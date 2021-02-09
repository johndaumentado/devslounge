<html>
    <head>
    <title>My Online Store</title>
    

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

<?php
    session_start(); //starts the session
 /*   if($_SESSION['user']){ //checks if user is logged in
    }
    else{
    header("location:index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value
*/
?>

<style>
        body{
            background-color: #FFFEF2;
            text-align: center;
            padding-top: 20px;
            padding-bottom:  20px;
            padding-right: 20px;
            padding-left: 20px;
            font-family: Josefin Sans;
            background-image: linear-gradient(to right, #FFFEF2 , #F6E8B1);
            font-size: 30px;
        }

        form{
            font-family: Josefin Sans;
            width: 100%;
            margin: auto;
            font-size: 20px;
            border-width: 5px;
            border-style: solid;
            border-radius: 10px;
            padding-top: 20px;
            padding-bottom:  20px;
            padding-right: 20px;
            padding-left: 20px;
            border-color: rosybrown;
            box-sizing: 40%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .table{
            font-family: Josefin Sans;
            text-align: center;
            margin: auto;
            font-size: 22px;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-right: 20px;;
            padding-left: 20px;
            width: 100%;
            box-sizing: border-box;
            border-collapse: collapse;
            background-color:rgba(255, 255, 255, 0.555);
            opacity: 50;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        input[type=text] {
            width: 100%;
            padding: 10px 10px;
            margin: 8px;
            border: 2px;
            border-radius: 4px;
            box-sizing: 23px;
            font-family: Josefin Sans;
            font-size: 25px;
            text-align: center;
        }

    
        input[type=submit] {
            padding: 12px 10px;
            border-color: rosybrown;
            border-radius: 4px;
            border-width: 3px;
            margin: 8px;
            border: 2px;
            box-sizing: 30px;
            font-family: Josefin Sans;;
            font-size: 20px;
            text-align: center;
            background-color: lightpink;
        }

        h2{
            font-family: Josefin Sans;;
            font-size: 40px;
            margin-bottom: 10px;
            margin-top: 10px;
            padding-top: 0px;
            text-align: center;
        }

        p{
            font-family: Josefin Sans;;
            font-size: 25px;
            margin-bottom: 10px;
            margin-top: 10px;
            padding-top: 0px;
            text-align: center;
        }

        th{
            border: 2px solid black;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 10px;;
            padding-left: 10px;
            font-size: 25px;
        }

        td{
            border: 0.5px solid black;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 10px;;
            padding-left: 10px;
            font-size: 22px;
        }

        .column1 {
            float: left;
            width: 30%;
        }

        .column2 {
            float: right;
            width: 65%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

</style>


<body>

<img src="onlinestorelogo.png" align="center" style="width:250px;">

    <h2>Home Page</h2><br>


    <div class=row>
    
    <div class="table">
    <h2 align="center">My list</h2>
    <table width="100%">
    <tr>
    <th>Developer ID Number</th>
    <th>Skills</th>
    <th>Status</th>
    </tr>

 <?php
    $con = mysqli_connect("localhost", "root", "", "deliverydb") or die(mysqli_error()); //Connect to server
    $query = mysqli_query($con, "Select * from list"); // SQL Query
    while($row = mysqli_fetch_array($query))
    {
    Print "<tr>";
    Print '<td align="center">'. $row['dev_id'] . "</td>";                  //For getting the developer ID from the database
    Print '<td align="center">'. $row['skills'] . "</td>";                  //For getting the developer's skills from the database
    Print '<td align="center">'. $row['status'] . "</td>";                  //For getting the developer's status from the database  
//    Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
//    Print '<td align="center"><a href="edit.php?id='. $row['id'] .'">edit</a> </td>';
//    Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
//   Print '<td align="center">'. $row['public']. "</td>";
    Print "</tr>";
    }
 ?>

 </table>

    </div>
</div>
</div>
</body>
</html>