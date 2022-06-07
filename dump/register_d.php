<?php
    require('./db.php');
    // When form submitted, insert values into the database.
    if ( (isset($email)) || (isset($first_name)) || (isset($last_name))) {
        // removes backslashes
        $first_name = stripslashes($_REQUEST['first_name']);
        $last_name = stripslashes($_REQUEST['last_name']);
        //escapes special characters in a string
        $first_name = mysqli_real_escape_string($con, $first_name);
        $last_name = mysqli_real_escape_string($con, $last_name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $created_at = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (first_name,last_name, password, email, created_at)
                     VALUES ('$first_name','$last_name', '" . md5($password) . "', '$email', '$created_at')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header("Location: ./profile_setup/user_detail.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else { 
        header("Location: ./register.php");
    }
?>