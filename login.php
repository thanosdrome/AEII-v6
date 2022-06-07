<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="./css/log_in.css">

</head>
<body>
<?php
    require('./db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_REQUEST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die();
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: ./index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
    } 
	else {
?>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		 
		<!---<img
		src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg"
		alt="login form" 
		class="img-responsive "   width="50% " height= 50%   style="border-top-left-radius:20px    border - bottom left radius 20px;  "
	 
		/>--->
		</div>
	</div>

	<div class="right">
		<form action="" method="POST">
		<h2 >LOGIN   </h2>
		<H3> Free Registration /Sign In </H3>
		<p>Don't have an account? <a href="register.php">Create Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type="text" placeholder="email">
			<br>
			<input type="password" placeholder="password">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
	
			
		</div>
			
			<br>
			<button> CONTINUE</button>
		</form>
	</div>
	
</div>
<!-- partial -->
<?php }
 ?>
</body>
</html>
