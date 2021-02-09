<?php
    session_start();
    $_SESSION['type'] = "client";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/devslounge.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">DevsLounge</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav ml-auto">
    <?php
        if(isset($_SESSION['type'])&& $_SESSION['type']=="admin"){
            echo  '<li class="nav-item"><a class="nav-link" href="#">Control Panel</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Job Postings</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Log-out</a></li>'; //add a button for this instead. 
        }else if(isset($_SESSION['type'])&& ( $_SESSION['type']=="developer" || $_SESSION['type']=="client" )){
            echo  '<li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Job Postings</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Log-out</a></li>'; //add a button for this instead. 
        }else{
            echo  '<li class="nav-item"><a class="nav-link" href="#">Log-in</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Register</a></li>';
        }
    ?>
	</ul>
  </div>
</nav>
</body>
</html>
  
