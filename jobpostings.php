<!-- Job Postings -->

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

<!-- DevsLounge Job Postings -->

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

        <link rel = "icon" href = "logo-icon.png">

        <!--Styles-->

        <link href = "style/jobpostings.css" rel = "stylesheet" type = "text/css">

    </head>


    <body>


        <!-- Navbar -->

        <?php include('navbar.php'); ?>

      


        <!--Job Postings Heading-->

        <div class="container-fluid">

            <div class = "job-contents">

                <div class="row">

                    <div class="col-lg-6">


                        <!--Heading-->
                        <div class = "container-fluid">

                            <div class = "row"> 

                                <div class = "job-heading">

                                    Job Postings

                                </div>
                            </div>

                            <div class = "job-text">

                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

                            </div>

                        </div>
    
 
                    </div>


                    <div class="col-lg-6">

                        <center><img src="img/jobpostings.png" width="600" height="600" alt="jobpostings">
                    
                    </div>
                    
                </div>
            </div>

        </div>

        <br />
        <br />


        <!--Table for Job Postings-->
        <div class=row>
            
            <div class="table">
        
                <table>

                    <!--Table Heading-->
                    <tr>
                        <th>Job Posting ID Number</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Preferred Skill</th>
                        <th>Client Name</th>
                        <th>Status</th>
                        <th>Developer Complete</th>
                    </tr>


                    <!--PHP for adding contents to table-->
                    <?php

                        $dbServername = "localhost";
                        $dbUsername = "root";
                        $dbPassword = "";
                        $dbName = "devslounge";
                        $conn = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName) or die(mysqli_error()); // connect to server 

                        if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
                        {
                            $title = ($_POST['title']);
                            $description = ($_POST['description']);

                            $status ="Hiring";    //For the status
                            $skill_id =($_POST['skill_id']);    //For the skills
                            $con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
                            
                            mysqli_query($con, "INSERT INTO job_postings (title, description, status, skill_id) VALUES  ('$title','$description','$status', '$skill_id')"); //SQL query
                        }
                        //  else
                        // {
                        // header("location:home.php"); //redirects back to home
                        // }

                    ?>


                    <!--PHP for displaying list of job postings -->
                    <?php

                        $conn = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName) or die(mysqli_error()); //Connect to server db name:[devslounge]
                        $query = mysqli_query($con, "Select * from job_postings"); // SQL Query

                        while($row = mysqli_fetch_array($query))
                        {
                            Print "<tr>";
                            Print '<td align="center">'. $row['job_id'] . "</td>";                      //For getting the job ID from the database
                            Print '<td align="center">'. $row['title'] . "</td>";                       //For getting the job title from the database
                            Print '<td align="center">'. $row['description'] . "</td>";                 //For getting the job description from the database
                            Print '<td align="center">'. $row['skill_id'] . "</td>";                 //For getting the preferred skill of the developer from the database
                            Print '<td align="center">'. $row['client_id'] . "</td>";                   //For getting the client's id from the database
                            Print '<td align="center">'. $row['status'] . "</td>";                      //For getting the status of the job from the database
                            Print '<td align="center">'. $row['dev_id'] . "</td>";                      //For getting the developer's id

                            //    Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
                            //    Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
                            //   Print '<td align="center">'. $row['public']. "</td>";
                                Print "</tr>";
                        }
                    ?>

                </table>

                <!--Form for adding a job post-->

                <form action="jobpostings.php" method="POST">

                    <br/>
                    <br/>
                    <br/>

                    Add a job posting: <br/>

                    Job Title: <input type="text" name="title"/><br/>
                    Description: <input type="text" name="description"/><br/>
                    <p>Preferred Skill: </p><select name="skill_id" id="skill_id" value="skill_id" style="font-family: Josefin Sans; font-size: 20px;" >
                                            <option value="HTML" style="font-family: Josefin Sans; font-size: 20px;">HTML / CSS</option>
                                            <option value="C++" style="font-family: Josefin Sans; font-size: 20px;">C++</option>
                                            <option value="Phython" style="font-family: Josefin Sans; font-size: 20px;">Phython/option>
                                            <option value="Java" style="font-family: Josefin Sans; font-size: 20px;">Java</option>
                                            <option value="C#" style="font-family: Josefin Sans; font-size: 20px;">C#</option>
                                        </select>
                                        
                    <input type="submit" value="Add to list"/>

                </form>


        


            </div>
        </div>
        </div>

        <?php include('footer.php'); ?>

    </body>
</html>