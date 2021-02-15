<?php
 $con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
 $user_id = $_GET['user_id'];
 mysqli_query($con, "DELETE FROM users WHERE id='$id'");
 header("location: admin-monitorusers.php");
?>