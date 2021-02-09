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
    <th>Job Posting ID Number</th>
    <th>Title</th>
    <th>Description</th>
    <th>Client Name</th>
    <th>Status</th>
    <th>Developer Complete</th>
    </tr>

 <?php
    $con = mysqli_connect("localhost", "root", "", "deliverydb") or die(mysqli_error()); //Connect to server
    $query = mysqli_query($con, "Select * from list"); // SQL Query
    while($row = mysqli_fetch_array($query))
    {
    Print "<tr>";
    Print '<td align="center">'. $row['job_id'] . "</td>";                      //For getting the job ID from the database
    Print '<td align="center">'. $row['title'] . "</td>";                       //For getting the job title from the database
    Print '<td align="center">'. $row['description'] . "</td>";                 //For getting the job description from the database
    Print '<td align="center">'. $row['client_post'] . "</td>";                 //For getting the client's post from the database
    Print '<td align="center">'. $row['status'] . "</td>";                      //For getting the status of the job from the database
    Print '<td align="center">'. $row['dev_complete'] . "</td>";                //For getting the 
//    Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
//    Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
//   Print '<td align="center">'. $row['public']. "</td>";
    Print "</tr>";
    }
 ?>

 </table>

<form action="addJob" method="POST">
<br><br><br>

    Add a job posting? <br/>

    Job Title: <input type="text" name="title"/><br/>
    Description: <input type="text" name="description"/><br/>
    <input type="submit" value="Add to list"/>

</form>

<script>
    function addJob(id)
    {
        session_start();


        //if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
        //{
            $title = ($_POST['title']);
            $description = ($_POST['description']);

            $status ="Hiring";    //For the status
            $con = mysqli_connect("localhost", "root", "", "deliverydb") or die(mysqli_error()); //Connect to server
            
            mysqli_query($con, "INSERT INTO list (title, description, status) VALUES  ('$title','$description','$status')"); //SQL query
    //    }
      //  else
       // {
       // header("location:home.php"); //redirects back to home
       // }
    }
    </script>



</div>
</div>
</div>
</body>
</html>