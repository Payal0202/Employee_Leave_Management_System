<?php
$server = "localhost";
$username = "root";
$password = "Sejal@2004";

$con = mysqli_connect($server, $username, $password);

if (isset($_POST['submit'])) {
  session_start();


  $email = $_POST['email'];
  $password = $_POST['password'];

  // if(isset($_SESSION['email'])) {
//     echo "<a href='employee.php'>Login</a>";

  // }
// else{
//     if($_POST['email']==$email && $_POST['password']==$password){
//         $_SESSION['email']=$email; 
//         echo "<a href='e_login.php'>Login1</a>";
//     }
//     else{
//         echo "<script>alert('Invalid Credentials!')</script>";
//     }
// }


  // if (isset($_POST['submit'])) {



  //   if (!$con) {
//     die("Connection to this database failed");
//     mysqli_connect_error();
//   }



  $sql = "SELECT * FROM `project`.`employee` WHERE email = '$email' && password = '$password';";
  $result = mysqli_query($con, $sql);


  if (mysqli_num_rows($result) === 1) { // if a row was returned, login is successful

    $row = mysqli_fetch_assoc($result);
    if ($row['email'] === $email && $row['password'] === $password) {
      // echo "Logged In!";
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
      header("Location: lrecord.php");
      exit();

    } else {
      // header("Location: e_login.php?error=Invalid credentials");
      echo "<script>alert('Invalid Credentials!')</script>";
      header("Location: lrecord.php");
      exit();
    }

  } else {
    header("Location: lrecord.php");
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>EMPLOYEE LOGIN</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <a href="company_home.php" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>
  </header>

  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>EMPLOYEE LOGIN</h2>
        <div class="underline-title"></div>

      </div>
      <form method="post" class="form">
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
        <!-- <p4><a href="emp_signup.php">Don't have an account yet??
          </a></p4> -->
      </form>
    </div>
  </div>

</body>

</html>