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

  $employee_id = $_POST['employee_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


  // $sql = "INSERT INTO `project`.`login` (`email`,`password`) values ('$email','$password');";
  $sql = "SELECT * FROM `project`.`employee` WHERE email = '$email' && password = '$password';";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $error[] = 'User already exists!';

  } else {

    if ($password != $cpassword) {
      $error[] = 'Password not matched!';
    } else {
      $insert = "INSERT INTO `project`.`employee`(employee_id,name,email,mobile,address,password) VALUES('$employee_id','$name','$email','$mobile','$address','$password','$cpassword')";
      mysqli_query($con, $insert);
      header('location:login.php');
    }
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
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        /* body {
            background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
            background-size: cover;
        } */

        .container {
            background: #2d3e3f;
            width: 350px;
            height: 400px;
            padding-bottom: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: auto;
            padding: 70px 50px 20px 50px;
        }


        .fl {
            float: left;
            width: 110px;
            line-height: 35px;
        }

        .fontLabel {
            color: white;
          
            
        }

        .fr {
            float: right;
        }

        .clr {
            clear: both;
        }

        .box {
            width: 360px;
            height: 35px;
            margin-top: 10px;
            font-family: verdana;
            font-size: 12px;
        }

        .textBox {
            height: 35px;
            width: 190px;
            border: none;
            padding-left: 20px;
        }

        .new {
            float: left;
        }

    
        .radio {
            color: white;
            background: #2d3e3f;
            line-height: 38px;
        }

        .submit {
           
            float: center;
            border: none;
            color: white;
            width: 110px;
            height: 35px;
            background: #ff6600;
            text-transform: uppercase;
            cursor: pointer;
        }


        .box1{
           
            padding-top: 30px;
        }


        ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */

        }
    </style>
    <!-- <link href="css/style.css" type="text/css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>
    <!-- Body of Form starts -->
    <div class="container">
        <form method="post" autocomplete="on">
            <!--First name-->
            <div class="box">
                <label for="firstName" class="fl fontLabel"> Employee ID: </label>
                <!-- <div class="new iconBox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div> -->
                <div class="fr">
                    <input type="text" name="firstName" placeholder="ID" class="textBox" autofocus="on"
                        required>
                </div>
                <div class="clr"></div>
            </div>
            <!--First name-->


            <!--Second name-->
            <div class="box">
                <label for="secondName" class="fl fontLabel"> Name: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="text" required name="secondName" placeholder="Name" class="textBox">
                </div>
                <div class="clr"></div>
            </div>
            <!--Second name-->


            <!---Email ID---->
            <div class="box">
                <label for="email" class="fl fontLabel"> Email Id: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="email" required name="email" placeholder="Email Id" class="textBox">
                </div>
                <div class="clr"></div>
            </div>
            <!--Email ID----->

            <!---Phone No.------>
            <div class="box">
                <label for="phone" class="fl fontLabel"> Contact no: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="text" required name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
                </div>
                <div class="clr"></div>
            </div>
            <!---Phone No.---->

            <div class="box">
                <label for="address" class="fl fontLabel"> Address: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="address" required name="address" placeholder="Address" class="textBox">
                </div>
                <div class="clr"></div>
            </div>

            <!---Password------>
            <div class="box">
                <label for="password" class="fl fontLabel">Password: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="Password" required name="password" placeholder="Password" class="textBox">
                </div>
                <div class="clr"></div>
            </div>
            <!---Password---->

            <div class="box">
                <label for="cpassword" class="fl fontLabel">Confirm Password </label>
                <!-- <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="Password" required name="cpassword" placeholder="Confirm Password" class="textBox">
                </div>
                <div class="clr"></div>
            </div>


            <!--Terms and Conditions------>
            <!-- <div class="box terms">
                    <input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
            </div> -->
            <!--Terms and Conditions------>

            <!---Submit Button------>
            <div class="box1" style="background: #2d3e3f" >
                <input type="Submit" name="Submit" class="submit" value="SUBMIT">
            </div>
            <!---Submit Button----->
        </form>
    </div>
    <!--Body of Form ends--->
</body>

</html>