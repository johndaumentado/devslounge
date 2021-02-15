<?php
    session_start();
    
    if($_SESSION['users']){ //checks if user is logged in
       }
       else{
       header("location:index.php"); // redirects if user is not logged in
       }
       $users = $_SESSION['users']; //assigns user value
   
    include_once 'includes/dbconnect.php'

    if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
        {
            $title = ($_POST['title']);
            $description = ($_POST['description']);

            $status = "Hiring";    //For the status
            $dev_id = "null";

            $skill_id =($_POST['skill_id']);    //For the skills

            $conn = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
                                            
            mysqli_query($conn, "INSERT INTO job_postings (title, description, status, skill_id) VALUES ('$title','$description','$status', '$skill_id')"); //SQL query
            header("location: jobpostings.php");
        }
    
        //  else
        // {
        // header("location:home.php"); //redirects back to home
        // }
?>


