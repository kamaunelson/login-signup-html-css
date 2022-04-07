
<?php 

include("database.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signup Page</title>
    <link rel="stylesheet" href="styling.css">
  </head>
  <body>
    <div class="center">
      <h1>Signup/Register</h1>
      <form action="process_signup.php" method="post">
        <div class="txt_field">
          <input type="text" name="name"required>
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="email"required>
          <span></span>
          <label>Username/ Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password"required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          I am a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
