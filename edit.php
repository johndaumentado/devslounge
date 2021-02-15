<html>
	<head>
		<title>Devslounge</title>
	</head>
 <?php
 
 session_start(); //starts the session
 if($_SESSION['user']){ //checks if user is logged in
	}
 else{
 header("location:admin-monitorpostings.php "); // redirects if user is not logged in
	}
 $user = $_SESSION['user']; //assigns user value
 $id_exists = false;
 
 ?>
	<body>
	<?php include('navbar.php'); ?>
		<br>
		<table border="1px" width="100%">
			<tr>
				<th style="text-align:center;">Name</th>
				<th style="text-align:center;">Email</th>
				<th style="text-align:center;">Password</th>
				<th style="text-align:center;">Type</th>
			</tr>
 <?php
if(!empty($_GET['user_id']))
{
$id = $_GET['user_id'];
$_SESSION['userid'] = $user_id;
$id_exists = true;
$con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
$sql = "Select * from users Where user_id='$user_id'";
$query = mysqli_query($con, "SELECT * FROM users WHERE user_id='$user_id'"); // SQL Query
$count = mysqli_num_rows($query);
 if($count > 0)
					{
 while($row = mysqli_fetch_array($query)){
 Print "<tr>";
 Print '<td align="center">'. $row['name'] . "</td>";
 Print '<td align="center">'. $row['email'] . "</td>";
 Print '<td align="center">'. $row['password'] . "</td>";
 Print '<td align="center">'. $row['type']. "</td>";
 Print "</tr></table><br/>";

 $email = $row['email'];
 $type = $row['type'];
}
	}

 else{
    $id_exists = false;
      }
   }
   
   if($id_exists){ 

 Print '<form action="edit.php" method="POST">';
		   Print 'Update List: <br/>'; 
		   Print 'Details: <input type="text" name="details" value="'.$details.'"/><br/>';
		   if($public == "yes") {
 Print 'Public Post? <input type="checkbox" name="public[]" checked/><br/>'; 
 } 
 else {
 Print 'Public Post? <input type="checkbox" name="public[]"/><br/>';
 }
 Print'<input type="submit" value="Update List"/></form>';
		}
 else
		{
 Print '<h2 align="center">There is no data to be edited.</h2>';
		}
 ?>
 </body>
 </html>

 <?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
	$con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
	//$details = ($_POST['details']);
	$public = "no";
	$id = $_SESSION['id'];
	$time = strftime("%X");//time
	$date = strftime("%B %d, %Y");//date
	foreach($_POST['public'] as $list)
			{
	if($list != null)
				{
	$public = "yes";
				}
			}
	foreach($_POST['sale'] as $list)
			{
	if($list != null)
				{
	$sale = "yes";
				}
			}
	mysqli_query($con, "UPDATE list SET details='$details', public='$public', date_edited='$date', time_edited='$time' WHERE id='$id'") ;
	header("location: admin-monitorpostings.php");
 }
?>


   
