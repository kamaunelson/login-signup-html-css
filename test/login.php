
<?php

include("database.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT * FROM client_users WHERE username_email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      $pwd=$row['password'];
      if($mypassword == $pwd){

          session_start();
          $_SESSION["user"]= $row["username_email"];
          
         header("Location: signup.php");
      }else {
         //$error = echo "Your Login Name or Password is invalid";
         echo '<script>alert("Wrong password or username: could be user does not exist")</script>';
      }

      //number of counted once
      if($count == 1) {
        session_register("myusername");
        $_SESSION['ID'] = $myusername;
        
         session_start();
         $_SESSION['user']= $row["Password"];
        header("location: signup.php");
     }else {
        $error = "Your Login Name or Password is invalid";
     }
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page-Admin</title>
    <link rel="stylesheet" href="styling.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username"required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password"required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
