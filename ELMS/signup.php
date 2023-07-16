<?php
if (isset($_POST['submit'])) {

  $server = "localhost";
  $username = "root";
  $password = "Sejal@2004";

  $con = mysqli_connect($server, $username, $password);

  if (!$con) {
    die("Connection to this database failed");
    mysqli_connect_error();
  }
  // echo "Success connected";

  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  // $sql = "INSERT INTO `project`.`login` (`email`,`password`) values ('$email','$password');";
  $sql = "SELECT * FROM `project`.`login` WHERE email = '$email' && password = '$password';";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $error[] = 'User already exists!';

  } else {

    if ($password != $cpassword) {
      $error[] = 'Password not matched!';
    } else {
      $insert = "INSERT INTO `project`.`login`(email, password) VALUES('$email','$password')";
      mysqli_query($con, $insert);
      header('location:login.php');
    }
  }

  if ($con->query($sql) == true) {
    // echo "Successfully Inserted\n";
    //     echo "GO TO HOME PAGE & LOGIN";
  } else {
    echo "ERROR: $sql <br> $con->error";
  }

  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SIGN UP</title>
 
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>
  </header>

  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>REGISTER</h2>
        <div class="underline-title"></div>
        <?php
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<span class="error-msg">' . $error . '</span>';
          }
          ;
        }
        ;
        ?>
      </div>
      <form method="post" action="" class="form" name="Register">
        <!-- <form method ="post" action="signup.php" class="form" name="Register" onsubmit="return validation()"> -->

        <label for="user-email" style="padding-top:10px">
          &nbsp;Email
        </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:9px">&nbsp;Password
        </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <label for="con-password" style="padding-top:9px">&nbsp;Confirm Password
        </label>
        <input id="con-password" class="form-content" type="password" name="cpassword" required />
        <div class="form-border"></div>
        <p id="result"></p>
        <p3>Already have an account? <a href="login.php">Login Here</a></p3>
        <input id="submit-btn" type="submit" name="submit" value="REGISTER NOW" />
        
      </form>

    </div>
  </div>


  <!-- <script src="index.js"></script> -->
</body>

</html>