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

    $admin_id = $_POST['admin_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    // $sql = "INSERT INTO `project`.`login` (`email`,`password`) values ('$email','$password');";
    $sql = "SELECT * FROM `project`.`admin` WHERE email = '$email' && password = '$password';";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';

    } else {

        if ($password != $cpassword) {
            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO `project`.`admin`(admin_id,name,email,mobile,address,password) VALUES('$admin_id','$name','$email','$mobile','$address','$password');";
            mysqli_query($con, $insert);

            header('location:admin_login.php');
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
    <title>ADMIN SIGN UP</title>
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
            background: white;
            width: 350px;
            height: 500px;
            padding-bottom: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: auto;
            padding: 70px 50px 20px 50px;
            /* box-shadow: 10px 10px 5px lightblue; */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }


        .fl {
            float: left;
            width: 110px;
            line-height: 35px;
        }

        .fontLabel {
            color: black;


        }

        .fr {
            float: right;
            border: black;
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
            border-style: solid;
            padding-left: 20px;
        }

        .new {
            float: left;
        }


        .radio {
            border: black;
            color: white;
            background: #2d3e3f;
            line-height: 38px;
        }

        .submit {

            float: center;

            background: -webkit-linear-gradient(right, #7d83e1, #604cd1);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #7d83e1;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }


        .box1 {
            padding-left: 100px;
            padding-top: 30px;
        }


        ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */

        }

        h2 {
            padding-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="company_home.php" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>
    </header>

    <div class="container">
        <h2>ADMIN REGISTER</h2>

        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            }
            ;
        }
        ;
        ?>

        <form method="post" autocomplete="on">
            <!-- <form method ="post" action="signup.php" class="form" name="Register" onsubmit="return validation()"> -->
            <!--First name-->
            <div class="box">
                <label for="admin_id" class="fl fontLabel"> Employee ID: </label>
                <!-- <div class="new iconBox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div> -->
                <div class="fr">
                    <input type="text" name="admin_id" placeholder="ID" class="textBox" autofocus="on" required>
                </div>
                <div class="clr"></div>
            </div>
            <!--First name-->


           <div class="box">
                <label for="name" class="fl fontLabel"> Name: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="text" required name="name" placeholder="Name" class="textBox">
                </div>
                <div class="clr"></div>
            </div>


            <div class="box">
                <label for="email" class="fl fontLabel"> Email Id: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="email" required name="email" placeholder="Email Id" class="textBox">
                </div>
                <div class="clr"></div>
            </div>

            <div class="box">
                <label for="mobile" class="fl fontLabel"> Contact no: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="text" required name="mobile" maxlength="10" placeholder="Phone No." class="textBox">
                </div>
                <div class="clr"></div>
            </div>


            <div class="box">
                <label for="address" class="fl fontLabel"> Address: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="text" required name="address" placeholder="Address" class="textBox">
                </div>
                <div class="clr"></div>
            </div>

            <div class="box">
                <label for="password" class="fl fontLabel">Password: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="Password" required name="password" placeholder="Password" class="textBox">
                </div>
                <div class="clr"></div>
            </div>

            <div class="box">
                <label for="cpassword" class="fl fontLabel">ConfirmPassword: </label>
                <!-- <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div> -->
                <div class="fr">
                    <input type="Password" required name="cpassword" placeholder="Confirm Password" class="textBox">
                </div>
                <div class="clr"></div>
            </div>

            <p id="result"></p>
            <p3>Already have an account? <a href="admin_login.php">Login Here</a></p3>
            <div class="box1">
            <input id="submit-btn" type="submit" name="submit" value="REGISTER NOW" />
            </div>
        </form>

    </div>
    


    <!-- <script src="index.js"></script> -->
</body>

</html>