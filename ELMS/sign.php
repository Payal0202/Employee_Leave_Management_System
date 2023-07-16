<?php
if(isset($_POST['email'])){


$server = "localhost";
$username = "root";
$password = "Sejal@2004";

$con =mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to this database failed");
    mysqli_connect_error();
}
echo "Success connected";

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$sql = "INSERT INTO `project`.`login` (`email`,`password`) values ('$email','$password');";

if($con->query($sql) == true){
    echo "Successfully Inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

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
    <!-- <center>
    <div class="block-effect">
    <h2>Login here !</h2>
    <form action="mailto:sejalbhande04@gmail.com" enctype="text/plain">
        <input type="email" placeholder="Email"> <br><br>
        <input type="password" placeholder="Password"> <br><br>
        <input type="submit">
    </form>
    </div>
    </center> -->
    <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>REGISTER</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" action="signup.php" class="form" onsubmit="return validation()">
            <label for="user-email" style="padding-top:13px">
                &nbsp;Email
              </label>
            <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password
              </label>
            <input id="user-password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>
            <label for="con-password" style="padding-top:9px">&nbsp;Confirm Password
        </label>
        <input id="con-password" class="form-content" type="password" name="cpassword" required />
        <div class="form-border"></div>
        <p id="result"></p>
            <input id="submit-btn" type="submit" name="submit" value="SUBMIT" />
            <!-- <a href="#" id="signup">Don't have account yet?</a> -->
          </form>
        </div>
      </div>
      <script src="index.js"></script>
</body>
</html>