<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Company Portal</title>
    <style>
        div {
            display: flex;
            justify-content: center;
        }

        .button1 {
            display: block;
            background-color: #bfdefa;
            color: #000000;
            text-align: center;
            padding: 10px 20px;
            border-radius: 800px;
            font-size: 20px;
            text-decoration: none;
            margin-top: 20px;
            margin-bottom: 30px;
            width: 100px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        /* main {
            max-width: 120px;
            margin: 50;
            padding: 30px;
        } */
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <a href="company_home.php" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a> -->
    
    <header>
    <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>

    </header>
    

    <center>
        <h2>CHOOSE ACCOUNT TYPE</h2>
    </center>
    <br><br>


    <div>
        <img align="bottom" src="Admin_icon.jpeg" alt="front pic" width="250" height="250">
        <br>
        <img align="" src="Employee_icon.jpg" alt="front pic" width="250" height="250">
    </div>
    <!-- <main> -->

    <!-- <a href="login.php" class="button1">LOGIN</a>
        <a href="signup.php" class="button">SIGNUP</a> -->
    <br><br>
    <center><a href="admin_login.php" class="button1">ADMIN</a></center>
    <center><a href="emp_login.php" class="button1">EMPLOYEE</a></center>


    <!-- </main> -->

</body>

</html>