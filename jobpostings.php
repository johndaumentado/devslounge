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

                        <center><img src="img/jobpostings.png" width="600" height="500" alt="jobpostings">
                    
                    </div>
                    
                </div>
            </div>

        </div>

        <br />
        <br />



        <div class = "container-fluid">
            <!--Table for Job Postings-->
            <?php

            //NOTES
            //Need to add button to DEV table on column para mag-accept ng job
            //Change display on screen once button is clicked
            //Display skill_id

                    // CLIENT
                    if(isset($_SESSION['type']) && $_SESSION['type']=="client") {


                        echo '<div class=row>
                    
                
                            <div class="table">
                        
                                <table>
                
                                    <!--Table Heading-->
                                    <tr>
                                        <th>Job Posting ID Number</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Preferred Skill</th>
                                        <th>Client ID</th>
                                        <th>Status</th>
                                    </tr>';


                                        //For adding contents to table
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
                                            $email = $_SESSION['email'];
                                            $getClientID = "SELECT client_id FROM client c JOIN users u on c.user_id=u.user_id WHERE u.email = '$email'"; 
                                            $result = mysqli_query($conn, $getClientID);
                                            $clientID = $result->fetch_row();
                                            $_SESSION['clientID'] = $clientID[0];
                                            mysqli_query($conn, "INSERT INTO job_postings (title, description,client_id, status, skill_id) SELECT '$title','$description','$clientID[0]','$status', skills.skill_id FROM skills WHERE skills.name = '$skill_id'"); //SQL query
                                        }
                                        //  else
                                        // {
                                        // header("location:home.php"); //redirects back to home
                                        // }

                                        
                                        // For displaying contents to table
                                        $conn = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName) or die(mysqli_error()); //Connect to server db name:[devslounge]
                                        $query = mysqli_query($conn, "Select * from job_postings"); // SQL Query
                    
                                        while($row = mysqli_fetch_array($query)) {

                                            Print "<tr>";
                                            Print '<td align="center">'. $row['job_id'] . "</td>";           //For getting the job ID from the database
                                            Print '<td align="center">'. $row['title'] . "</td>";            //For getting the job title from the database
                                            Print '<td align="center">'. $row['description'] . "</td>";      //For getting the job description from the database
                                            Print '<td align="center">'. $row['skill_id'] . "</td>";         //For getting the preferred skill of the developer from the database
                                            Print '<td align="center">'. $row['client_id'] . "</td>";        //For getting the client's id from the database
                                            Print '<td align="center">'. $row['status'] . "</td>";           //For getting the status of the job from the database
                                            Print '<td align="center">'. $row['dev_id'] . "</td>";           //For getting the developer's id

                                            //    Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
                                            //    Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
                                            //   Print '<td align="center">'. $row['public']. "</td>";
                                    
                                            Print "</tr>";
                                        }

                                    
                                echo '</table>';

                                //Form for adding a job post
                                echo '<form action="jobpostings.php" method="POST">

                                    <br/>
                                    <br/>
                                    <br/>

                                    Add a job posting: <br/>

                                    Job Title: <input type="text" name="title"/><br/>
                                    Description: <input type="text" name="description"/><br/>
                                    <p>Preferred Skill: </p><select name="skill_id" id="skill_id" value="skill_id" style="font-family: Josefin Sans; font-size: 20px;" >
                                                            <option value="HTML/CSS" style="font-family: Josefin Sans; font-size: 20px;">HTML / CSS</option>
                                                            <option value="C++" style="font-family: Josefin Sans; font-size: 20px;">C++</option>
                                                            <option value="Python" style="font-family: Josefin Sans; font-size: 20px;">Python</option>
                                                            <option value="Java" style="font-family: Josefin Sans; font-size: 20px;">Java</option>
                                                            <option value="C#" style="font-family: Josefin Sans; font-size: 20px;">C#</option>
                                                        </select>
                                                        
                                    <input type="submit" value="Add to list"/>

                                </form>';
                            echo '</div>';
                        echo '</div>';

                    }

                    //END OF CLIENT PHP


                    // DEVELOPER
                    if(isset($_SESSION['type']) && $_SESSION['type']=="dev") {


                        echo '<div class=row>
                
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
                                        <th>Edit</th>
                                    </tr>';



                                        //For adding contents to table
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
                                            $email = $_SESSION['email'];
                                            $getClientID = "SELECT client_id FROM client c JOIN users u on c.user_id=u.user_id WHERE u.email = '$email'"; 
                                            $result = mysqli_query($conn, $getClientID);
                                            $clientID = $result->fetch_row();
                                            $_SESSION['clientID'] = $clientID[0];
                                            mysqli_query($conn, "INSERT INTO job_postings (title, description,client_id, status, skill_id) SELECT '$title','$description','$clientID[0]','$status', skills.skill_id FROM skills WHERE skills.name = '$skill_id'"); //SQL query
                                        }
                                        //  else
                                        // {
                                        // header("location:home.php"); //redirects back to home
                                        // }

                                        
                                        // For displaying contents to table
                                        $query = mysqli_query($conn, "Select * from job_postings"); // SQL Query
                    
                                        while($row = mysqli_fetch_array($query)) {

                                            Print "<tr>";
                                            Print '<td align="center">'. $row['job_id'] . "</td>";           //For getting the job ID from the database
                                            Print '<td align="center">'. $row['title'] . "</td>";            //For getting the job title from the database
                                            Print '<td align="center">'. $row['description'] . "</td>";      //For getting the job description from the database
                                            Print '<td align="center">'. $row['skill_id'] . "</td>";         //For getting the preferred skill of the developer from the database
                                            Print '<td align="center">'. $row['client_id'] . "</td>";        //For getting the client's id from the database
                                            Print '<td align="center">'. $row['status'] . "</td>";           //For getting the status of the job from the database
                                            Print '<td align="center">'. $row['dev_id'] . "</td>";           //For getting the developer's id
                                            Print '<td align="center"><a onclick="myFunction('. $row['job_id'] .')">Apply</a> </td>';         //Dev can apply


                                            //    Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
                                            //    Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
                                            //   Print '<td align="center">'. $row['public']. "</td>";
                                    
                                            Print "</tr>";
                                        }

                                    
                                echo '</table>';

                                
                            echo '</div>';
                        echo '</div>';

                    }

            echo $_SESSION['email'];
            echo $_SESSION['clientID'];
            echo $_SESSION['type'];

            ?>
        
        </div>
        <?php include('footer.php'); ?>

        <script>
            function myFunction(job_id)
            {
                var r=confirm("Are you sure you want to delete/edit this record?");
                if (r==true)
                {
                    window.location.assign("deleteJob.php?job_id=" + job_id);
                }
            }
        </script>
    </body>
</html>
