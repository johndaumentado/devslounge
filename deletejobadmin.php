<?php
//"ACCEPT JOB"
session_start(); //starts the session
if($_SERVER['REQUEST_METHOD'] == "GET")
{
include_once('includes/dbconnect.php');
$jobID = $_GET['job_id'];
$deletePosts = "DELETE FROM job_postings WHERE job_id='$jobID'";
mysqli_query($conn, $deletePosts);
Print '<script>window.location.assign("admin-monitorpostings.php");</script>';
echo $devID;
echo $type;
}
?>

