<?php
session_start(); //starts the session
if($_SERVER['REQUEST_METHOD'] == "GET")
{
$con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
$user_id = $_GET['user_id'];
$getClientID = "SELECT client_id FROM client c JOIN users u on c.user_id=u.user_id WHERE c.user_id= '$user_id'";
$getDevID = "SELECT dev_id FROM dev c JOIN users u on c.user_id=u.user_id WHERE c.user_id= '$user_id'";
$results = mysqli_query($con, $getClientID);
$clientResults = $results->fetch_row();
$clientID = $clientResults[0];
$deletePosts = "DELETE FROM job_postings WHERE client_id='$clientID'";
$deleteClient = "DELETE FROM client WHERE client_id='$clientID'";
mysqli_query($con, $deletePosts);
mysqli_query($con, $deleteClient);
mysqli_query($con, "DELETE FROM users WHERE user_id='$user_id'");
echo $clientID;

}
?>
