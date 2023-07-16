<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <style>
    #card4 {
      background: white;
      border-radius: 10px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 150px;
      margin: 2.5rem auto;
      width: 250px;
    }

    #card-content4 {
      padding: 12px 44px;
    }

    #card-title4 {
      font-family: Arial, Helvetica, sans-serif;
      /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
      letter-spacing: 4px;
      padding-bottom: auto;
      padding-top: auto;
      /* text-align: left; */
    }
  </style>

  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- The sidebar -->
  <div class="sidebar">
    <a class="active" href="#home">ELMS - ADMIN</a>
    <a style="background:#D6EAF8" href="admin.php">Dashboard</a>
    <a href="ad_dashboard.php">Leave Applications</a>
    <a href="emp_signup.php">Add Employee</a>
    <!-- <a href="leave_record.php">Leave Records</a>  -->
  </div>

  <div class="content">
    <header>
      <h1>Dashboard</h1>
      <!-- <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a> -->
      <nav class="header-nav">
        <a href="index.html" class="button">LOG OUT</a>
      </nav>

    </header>

  </div>

  <div class="content" style="float:left">
    <div id="card4">
      <div id="card-content4">
        <div id="card-title4">
          <h2>Employees</h2>
          <span style="color:red">
            <h2>
              <?php
              $server = "localhost";
              $username = "root";
              $password = "Sejal@2004";

              $con = mysqli_connect($server, $username, $password);
              $sql = "SELECT * from `project`.`employee`;";

              if ($result = mysqli_query($con, $sql)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result);

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
  <div class="content" style="float:right">
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
              $sql2 = "SELECT * from `project`.`leave_request` WHERE status = 'Pending';";

              if ($result2 = mysqli_query($con, $sql2)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result2);

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
          <h2>Total Applications</h2>
          <span style="color:red">

            <h2>
              <?php
              $server = "localhost";
              $username = "root";
              $password = "Sejal@2004";

              $con = mysqli_connect($server, $username, $password);
              $sql3 = "SELECT * from `project`.`leave_request`;";

              if ($result3 = mysqli_query($con, $sql3)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result3);

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
          <h2>Approved</h2>

          <span style="color:red">
            <h2>
              <?php
              $server = "localhost";
              $username = "root";
              $password = "Sejal@2004";

              $con = mysqli_connect($server, $username, $password);
              $sql1 = "SELECT * from `project`.`leave_request` WHERE status = 'Approved';";

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
              $sql3 = "SELECT * from `project`.`leave_request` WHERE status = 'Cancelled';";

              if ($result3 = mysqli_query($con, $sql3)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result3);

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