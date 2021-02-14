<?php
    include_once 'dbconnect.php'; //THIS IS TO CONNECT TO THE DB
    $email = ($_POST['email']);
    $name = ($_POST['name']);
    $password = ($_POST['password']);
    $language = ($_POST['language']);
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
        mysqli_query($conn, "INSERT INTO users (name, email, password, type) VALUES ('$name','$email','$password','dev')"); //Inserts the value to table users
        mysqli_query($conn, "INSERT INTO dev (status, user_id) VALUES('idle', LAST_INSERT_ID())");
        $dev_idTemp = mysqli_insert_id($conn);

        // Currently, the database is picking up on the insert. Dev_skill_id is being incremented, but the parameters 
        // dev_id and skill_id is not being shown (resulting in no rows being made). Possibly a mistake in the WHERE
        // condition. WHERE condition is set to '1' only for testing purposes. The intended variable in the condition
        // should be "language[]". Looping also unsure.
        
        for ($i=0; $i<count($language); $i++)
            mysqli_query($conn, "INSERT INTO dev_skills (dev_id, skill_id) SELECT '$dev_idTemp', skills.skill_id FROM skills WHERE skills.name='$language[$i]'");
        Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
        header("Location: ../home.php");
        }
?>
