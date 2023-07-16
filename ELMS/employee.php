<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>
  <style>
   
    #card4 {
    background: white;
    border-radius: 10px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 150px;
    margin: 4.5rem auto ;
    width: 400px;
  }
  #card-content4 {
    padding: 12px 44px;
  }
  #card-title4 {
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 9px;
    /* text-align: left; */
  }
  
  </style>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- The sidebar -->
  <div class="sidebar">
    <a class="active" href="#home">ELMS - EMPLOYEE</a>
    <a style="background:#D6EAF8" href="employee.php">Dashboard</a>
    <a href="aleave.php">Apply Leave</a>
    <a href="lrecord.php">Leave Records</a>
  </div>

  <div class="content">
  <header>
  <h1>Dashboard</h1>
        <nav class="header-nav">
            <a href="index.html" class="button">LOG OUT</a>
        </nav>
    </header>
   
  </div>
  <div class="content" style="float:left">
    <div id="card4">
      <div id="card-content4">
        <div id="card-title4">
          <h2>Leave Applications</h2>
          <span style="color:red">
            <h2>
              <?php
              session_start();

              
              $server = "localhost";
              $username = "root";
              $password = "Sejal@2004";

              $con = mysqli_connect($server, $username, $password);
              $email = $_SESSION['email'];
              // $password = $_SESSION['password'];
              
              if(isset($_SESSION['email'])) {
              $sql1 = "SELECT * from `project`.`leave_request` JOIN `project`.`employee` on employee.employee_id = leave_request.employee_id where email='$email';";

              if ($result1 = mysqli_query($con, $sql1)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result1);

                // Display result
                printf("%d", $rowcount);
              }
            }
             
              ?>
            </h2>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div id="card4">
      <div id="card-content4">
        <div id="card-title4">
          <h2>Approved</h2>
          <span style="color:red">
            <h2>
              <?php
              
              $server = "localhost";
              $username = "root";
              $password = "Sejal@2004";

              $con = mysqli_connect($server, $username, $password);

              $email = $_SESSION['email'];

              $sql1 = "SELECT * from `project`.`leave_request` JOIN `project`.`employee` on employee.employee_id = leave_request.employee_id where email='$email' And status = 'Approved';";

              if ($result1 = mysqli_query($con, $sql1)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result1);

                // Display result
                printf("%d", $rowcount);
              }
             
              ?>
            </h2>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="content" style="float:left">
    <div id="card4">
      <div id="card-content4">
        <div id="card-title4">
          <h2>Pending</h2>
          <span style="color:red">
            <h2>
              <?php
              $server = "localhost";
              $username = "root";
              $password = "Sejal@2004";

              $con = mysqli_connect($server, $username, $password);
              $sql1 = "SELECT * from `project`.`leave_request` JOIN `project`.`employee` on employee.employee_id = leave_request.employee_id where email='$email' And status = 'Pending';";

              if ($result1 = mysqli_query($con, $sql1)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result1);

                // Display result
                printf("%d", $rowcount);
              }

              ?>
            </h2>
          </span>
        </div>

      </div>
    </div>
  </div>
  <div class="content">
    <div id="card4">
      <div id="card-content4">
        <div id="card-title4">
          <h2>Cancelled</h2>
          <span style="color:red">
            <h2>
              <?php
              $server = "localhost";
              $username = "root";
              $password = "Sejal@2004";

              $con = mysqli_connect($server, $username, $password);
              $sql1 = "SELECT * from `project`.`leave_request` JOIN `project`.`employee` on employee.employee_id = leave_request.employee_id where email='$email' And status = 'Cancelled';";

              if ($result1 = mysqli_query($con, $sql1)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result1);

                // Display result
                printf("%d", $rowcount);
              }

              ?>
            </h2>
          </span>
        </div>
      </div>
    </div>
  </div>

</body>

</html>