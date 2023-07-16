<?php
if (isset($_POST['submit'])) {

  $server = "localhost";
  $username = "root";
  $password = "Sejal@2004";

  $con = mysqli_connect($server, $username, $password);

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `project`.`admin` WHERE email = '".$email."' && password = '".$password."';";
  $result = mysqli_query($con, $sql);


  if ($result->num_rows == 1) { // if a row was returned, login is successful
    // echo "<script>alert('Login Successful')</script>";
    header('Location: admin.php');
  } else {
    echo "<script>alert('Invalid Credentials!')</script>";
  }

  // header('location:company.php');

  // $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ADMIN LOGIN</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <a href="company_home.php" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>
  </header>

  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>ADMIN LOGIN</h2>
        <div class="underline-title"></div>
       
      </div>
      <form method="POST" class="form">
        <label for="email" style="padding-top:13px">
          &nbsp;Email
        </label>
        <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;Password
        </label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
       
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <!-- <p4><a href="admin_signup.php">Don't have an account yet?? -->
          <!-- </a></p4> -->
      </form>
    </div>
  </div>

</body>

</html>