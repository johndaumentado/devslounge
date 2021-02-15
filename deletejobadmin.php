<?php
//"ACCEPT JOB"
session_start(); //starts the session
if($_SERVER['REQUEST_METHOD'] == "GET")
{
$con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
$jobID = $_GET['job_id'];
$deletePosts = "DELETE FROM job_postings WHERE job_id='$jobID'";
mysqli_query($con, $deletePosts);
Print '<script>window.location.assign("admin-monitorpostings.php");</script>';
echo $devID;
echo $type;
}
?>

