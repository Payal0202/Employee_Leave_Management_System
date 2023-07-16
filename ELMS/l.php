<?php
$error="";
$success="";

  $server = "localhost";
  $username = "root";
  $password = "Sejal@2004";
  
  $con = mysqli_connect($server, $username, $password);

  if (!$con) {
    die("Connection to this database failed");
    mysqli_connect_error();
  }
  // echo "Success connected";
if (isset($_POST['submit'])) {

  

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `project`.`login` WHERE email = '$email' && password = '$password';";
  $result = mysqli_query($con, $sql);

//   if ($con->query($sql) == true) {
//     echo "Successfully Logged In";
//     // require_once 'company.php';
//   } else {
//     echo "Error: $sql <br> $con->error";
//   }

if($email=="sejalbhande04@gmail.com"){
    if($password=="sejal"){
        $error="";
        $success="Welcome";
        header('location:company.php');
    }
    else{
        $error="Invalid Password";
        $success="";
    }
}
else{
    $error="Invalid Email";
    $success="";
}
  

//   header('location:company.php');

  $con->close();
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
      <p6 class="error"><?php echo $error;?></p6><p6 class="success"><?php echo $success;?></p6>
      <form method="post" action="company.php" class="form" enctype="text/plain">
        <label for="user-email" style="padding-top:13px">
          &nbsp;Email
        </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
        </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <p4><a href="signup.php">Don't have an account yet??
          
      
      </a></p4>
      </form>
    </div>
  </div>

</body>

</html>