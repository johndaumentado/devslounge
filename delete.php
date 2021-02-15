<?php
session_start(); //starts the session
if($_SERVER['REQUEST_METHOD'] == "GET")
{
    
    include_once 'includes/dbconnect.php' or die(mysqli_error()); //Connect to server
$user_id = $_GET['user_id'];
$getUserType = "SELECT type FROM users WHERE user_id='$user_id'";
$results = mysqli_query($conn, $getUserType);
$typeResults = $results->fetch_row();
$type = $typeResults[0];

if($type=="client"){
$getClientID = "SELECT client_id FROM client c JOIN users u on c.user_id=u.user_id WHERE c.user_id= '$user_id'";
$getDevID = "SELECT dev_id FROM dev c JOIN users u on c.user_id=u.user_id WHERE c.user_id= '$user_id'";
$results = mysqli_query($conn, $getClientID);
$clientResults = $results->fetch_row();
$clientID = $clientResults[0];
$deletePosts = "DELETE FROM job_postings WHERE client_id='$clientID'";
$deleteClient = "DELETE FROM client WHERE client_id='$clientID'";
mysqli_query($conn, $deletePosts);
mysqli_query($conn, $deleteClient);
mysqli_query($conn, "DELETE FROM users WHERE user_id='$user_id'");
echo $clientID;
} else if($type=="dev"){
$getDevID = "SELECT dev_id FROM dev d JOIN users u on d.user_id=u.user_id WHERE d.user_id= '$user_id'";
$results = mysqli_query($conn, $getDevID);
$devResults = $results->fetch_row();
$devID = $devResults[0];
$deleteDevSkills = "DELETE FROM dev_skills WHERE dev_id='$devID'";
$deletePosts = "DELETE FROM job_postings WHERE dev_id='$devID'";
$deleteDev = "DELETE FROM dev WHERE dev_id='$devID'";
mysqli_query($conn, $deletePosts);
mysqli_query($conn, $deleteDevSkills);
mysqli_query($conn, $deleteDev);
mysqli_query($conn, "DELETE FROM users WHERE user_id='$user_id'");
} else if($type=="admin"){
}
Print '<script>window.location.assign("admin-monitorusers.php");</script>';
echo $devID;
echo $type;
}
?>
