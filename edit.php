<html>
	<head>
		<title></title>
	</head>
 <?php
 
 /*session_start(); //starts the session
 if($_SESSION['user']){ //checks if user is logged in
	}
 else{
 header("location:login.php "); // redirects if user is not logged in
	}
 $user = $_SESSION['user']; //assigns user value
 $id_exists = false;*/
 ?>
	<body>
		<h2>Home Page</h2>
		<p>Hello <?php Print "$users"?>!</p> <!--Displays user's name-->
		<h2 align="center">Currently Selected</h2>
		<table border="1px" width="100%">
			<tr>
				<th>Id</th>
				<th>Details</th>
				<th>Post Time</th>
				<th>Edit Time</th>
				<th>Public Post</th>
			</tr>
 <?php
 if(!empty($_GET['id'])){
 $id = $_GET['id'];
 $_SESSION['id'] = $id;
 $id_exists = true;
 $con = mysqli_connect("localhost", "root", "", "devslounge") or die(mysqli_error()); //Connect to server
 $sql = "Select * from list Where id='$id'";
 $query = mysqli_query($con, $sql); // SQL Query
 $count = mysqli_num_rows($query);
 if($count > 0)
					{
 while($row = mysqli_fetch_array($query)){
 Print "<tr>";
 Print '<td align="center">'. $row['user_id'] . "</td>";
 Print '<td align="center">'. $row['name'] . "</td>";
 Print '<td align="center">'. $row['email'] . "</td>";
 Print '<td align="center">'. $row['type']. "</td>";
 Print "</tr></table><br/>";

 $details = $row['details'];
 $public = $row['public'];
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
	header("location: home.php");
 }
?>


   
