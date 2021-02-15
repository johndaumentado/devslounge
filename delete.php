<?php
session_start(); //starts the session
if($_SESSION['user']){ //checks if user is logged in
}
else{
header("location:index.php"); // redirects if user is not logged in
}
if($_SERVER['REQUEST_METHOD'] == "GET")
{
$con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
$user_id = $_GET['user_id'];
mysqli_query($con, "DELETE FROM list WHERE id='$user_id'");
header("location: home.php");
}
?>
