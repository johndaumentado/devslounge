<?php

    session_start();

    $email = ($_POST['email']);
    $password = ($_POST['pass']);
    include_once 'includes/dbconnect.php';

    $query = "SELECT * from users WHERE email='$email'";
    $results = mysqli_query($con, $query); //Query the users table if there are matching rows equal to $email
    $exists = mysqli_num_rows($con, $query); //Checks if username exists
    $table_email = "";
    $table_password = "";

    if($results != "") //IF there are no returning rows or no existing username
    {
        while($row = mysqli_fetch_assoc($results)) //display all rows from query
        {
            $table_email = $row['email']; // the first username row is passed on to $table_email, and so on until the query is finished
            $table_password = $row['password']; // the first password row is passed on to $table_email, and so on until the query is finished
        }
        
        if(($email == $table_email) && ($password == $table_password)) // checks if there are any matching fields
        {
            if($password == $table_password)
            {
                $_SESSION['email'] = $email; //set the username in a session. This serves as a global variable
                header("location: home.php"); // redirects the user to the authenticated homepage
               
            }
            else
            {
                Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
                Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
            }
        }

        else
        {
            Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
            Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
        }
    }
?>
