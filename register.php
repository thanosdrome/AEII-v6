<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="./css/registration.css " rel="stylesheet">
   

</head>
<body>
<?php
    require('./db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){
        // removes backslashes
        $first_name = stripslashes($_REQUEST['first_name']);
        $last_name = stripslashes($_REQUEST['last_name']);
        //escapes special characters in a string
        $first_name = mysqli_real_escape_string($con, $first_name);
        $last_name = mysqli_real_escape_string($con, $last_name);
        $email    = stripslashes($_REQUEST['email']);
        $mobile_number    = stripslashes($_REQUEST['mobile_number']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $created_at = date("Y-m-d H:i:s");
        $query    = "INSERT INTO `users` (first_name,last_name, password, mobile_number,email, created_at)
                     VALUES ('$first_name','$last_name', '" . md5($password) . "', '$mobile_number','$email', '$created_at')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='./login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='./register.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<!-- partial:index.partial.html -->
<div class="box-form" method="POST" action="./index.php">
	<div class="left">
	<img src="./img/3735354.jpg" alt="login form" class="img-responsive "   width="50% " height= 100%   style="border-top-left-radius:20px    border - bottom left radius 20px;  "/>

	</div>

		<div class="right">
		<h2 >SELL WITH EASE ON CENTRAL INDIA'S LARGEST B2B MARKET  </h2>
		<H3> Free Registration /Sign In </H3>
		<p>Already have an Account?<a href="./login.php">Login</a>
		<form action="">
		<div class="inputs">
			<input type="text" placeholder="First name " name="first_name">
			<br>
			<input type="text" placeholder="Last name" name="last_name">
			<input type="text" placeholder="Email" name="email">
			<input type="text" placeholder="Mobile" name="mobile_number">
			<input type="password" placeholder="Passsword" name="password">
			
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
	
			<p > <a hidden="#"> forget password?</a> </p>
		</div>
			
			<br>
			<button type="submit"> CONTINUE</button>
		</form>
	</div>
	
</div>
<!-- partial -->
<?php } ?>
</body>
</html>
