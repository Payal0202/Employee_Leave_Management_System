<?php
if (isset($_POST['submit'])) {

  $server = "localhost";
  $username = "root";
  $password = "Sejal@2004";

  $con = mysqli_connect($server, $username, $password);

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `project`.`login` WHERE email = '".$email."' && password = '".$password."';";
  $result = mysqli_query($con, $sql);


  if ($result->num_rows == 1) { // if a row was returned, login is successful
    echo "<script>alert('Login Successful')</script>";
    header('Location: company.php');
  } else {
    echo "<script>alert('Invalid Credentials!')</script>";
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>
  </header>

  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
       
      </div>
      <form method="POST" class="form">
        <label for="user-email" style="padding-top:13px">
          &nbsp;Email
        </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
        </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <p4><a href="signup.php">Don't have an account yet??
          </a></p4>
      </form>
    </div>
  </div>

</body>

</html>