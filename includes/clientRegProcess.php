<?php
    include_once 'dbconnect.php'; //THIS IS TO CONNECT TO THE DB
    $email = ($_POST['email']);
    $name = ($_POST['name']);
    $password = ($_POST['password']);
    $company = ($_POST['company']);
    $comparisonCheck = true;
    $query = "SELECT * from users";
    $results = mysqli_query($conn, $query); //Query the users table
    while($row = mysqli_fetch_array($results)){ //fetch all data
        $table_users = $row['email']; // the first email row is passed on to $table_users, and so on until the query is finished
        if($email == $table_users){
            $comparisonCheck = false;
            Print '<script>alert("email has been taken!");</script>'; //Prompts the user
            echo "not working";
            break;
        }
    }
    if($comparisonCheck==true){
        mysqli_query($conn, "INSERT INTO users (name, email, password, type) VALUES ('$name','$email','$password','client')"); //Inserts the value to table users
        mysqli_query($conn, "INSERT INTO client (company, user_id) VALUES('$company', LAST_INSERT_ID())");
        header("Location: ../login.php");
        }
?>
