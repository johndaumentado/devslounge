<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<body style="background-color:black;">
	<form action="includes/devRegProcess.php" method="POST">
    <div class="signup-form-form">
      <h1><p style="color:White">Developer Sign Up</p></h1>
      <p style="color:White">Please fill in this form to create an account.</p>
	  
	  <p style="color:White"><label for="name"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
	  
	  <p style="color:White"><label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
		
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	  <p style="color:White"><label for="name"><b>Which Programming Languages do you use?</b></label><br />
		<input type="checkbox" name="language[]" value="HTML/CSS" />HTML/CSS<br />
		<input type="checkbox" name="language[]" value="PHP" />PHP<br />
		<input type="checkbox" name="language[]" value="C++" />C++<br />
		<input type="checkbox" name="language[]" value="Python" />Python<br />
		<input type="checkbox" name="language[]" value="Java" />Java<br />
		<input type="checkbox" name="language[]" value="C#" />C#<br />
		<br />
      </p>
      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
	  
    </div>
  </form>
</div>
</body>
</html>
