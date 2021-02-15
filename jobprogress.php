<!-- Job In-Progress -->

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

        <link rel = "icon" href = "img/logo-icon.png">

        <!--Styles-->

        <link href = "style/jobpostings.css" rel = "stylesheet" type = "text/css">

    </head>


    <body>

    <!-- Navbar -->

    <?php //include('navbar.php'); ?>

           <!--Job Postings Heading-->

           <div class="container-fluid">

                <div class = "job-contents">

                    <div class="row">

                        <div class="col-lg-6">


                            <!--Heading-->
                            <div class = "container-fluid">

                                <div class = "row"> 

                                    <div class = "job-heading">

                                        Work In Progress

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

            <div class = "container-fluid">
            

                <!--PHP for displaying details of job-->

                <?php

                    // If logged in as Developer

                //if(!empty($_GET['job_id'])) {
                    //if(isset($_SESSION['type']) && $_SESSION['type']=="developer") { 

                        // table container
                        echo '<div class = "table-content">';

                            echo '<div class = "text-center">';
                            
                                //table
                                echo '<table style = "background-color: #FFFFFF; width:100%; margin:auto; border: 3px solid #05668D;">
                                    <tr style = "border: 3px solid #05668D;">
                                        <th style = "text-align:center; padding:2px">Title</th>
                                        <th style = "text-align:center; padding:20px">Description</th>
                                        <th style = "text-align:center; padding:20px">Client Name</th>
                                        <th style = "text-align:center; padding:20px">Client Email</th>
                                    </tr>';


                                    echo '</div>';

                                    if(!empty($_GET['job_id']))
                                    {
                                        $job_id = $_GET['job_id'];
                                        $_SESSION['job_id'] = $job_id;
                                        $id_exists = true;
                                        $conn = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
                                        $sql = "Select * from job_postings Where job_id='$job_id'";
                                        $query = mysqli_query($conn, $sql); // SQL Query
                                        $count = mysqli_num_rows($query);

                                        if($count > 0)
                                        {
                                            while($row = mysqli_fetch_array($query))
                                            {
                                                Print "<tr>";
                                                Print '<td align="center">'. $row['title'] . "</td>";
                                                Print '<td align="center">'. $row['description'] . "</td>";
                                                Print '<td align="center">'. $row['name'] . "</td>";
                                                Print '<td align="center">'. $row['email'] . "</td>";
                                                Print "</tr></table></div><br/>";
                                                $details = $row['details'];
                                            }
                                        }

                                        else
                                        {
                                            $id_exists = false;
                                        }
                                    }

                                echo '</table>';

                            echo '</div>';

                        echo '</div>';


                    //}
                //}
                    // END OF DEVELOPER PHP

                ?>
            </div>    

        <?php //include('footer.php'); ?>

    </body>

</html>