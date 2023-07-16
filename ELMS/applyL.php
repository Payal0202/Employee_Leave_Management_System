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
  $type = $_POST['type'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  // $status = $_POST['status'];


  $insert = "INSERT INTO `project`.`leave_request`(employee_id ,name,type ,start_date ,end_date) VALUES('$employee_id','$name','$type','$start_date','$end_date');";
  

  if ($con->query($insert) == true) {
    //echo "<script>alert('Applied for Leave successfully')</script>";
    header('Location: employee.php');
  } else {
    echo "ERROR: $insert <br> $con->error";
  }

  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="sidebar">
    <a class="active" href="#home">ELMS</a>
    <a href="employee.php">Dashboard</a>
    <a style="background:#D6EAF8" href="applyL.php">Apply Leave</a>
    <a href="leave_record.php">Leave Records</a>
  </div>

  <div class="content">
    <header>
      <h1>Apply Leave</h1>
      <!-- <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a> -->
      <nav class="header-nav">
        <a href="index.html" class="button">LOG OUT</a>
      </nav>
    </header>

  </div>
  <div class="content">
    <div class="card">
      <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
      <div class="container">
        <form method="post" class="form">

          <label for="employee_id">
            &nbsp;
          </label>
          <input id="employee_id" class="form-content" type="id" name="employee_id" placeholder="Employee ID"
            autocomplete="on" required />
          <div class="form-border"></div>
      
        <label for="name" style="padding-top:20px">
            &nbsp;
          </label>
          <input id="text" class="form-content" type="text" name="name" placeholder="Name"
            autocomplete="on" required />
            <div class="form-border"></div>

          <label for="leave-type" style="padding-top:30px"></label>

          <select name="type" id="type">
            <option value="">Select leave type</option>
            <option value="Casual Leave">Casual Leave</option>
            <option value="Annual Leave">Annual Leave</option>
            <option value="Maternity Leave">Maternity Leave</option>
            <option value="Sick Leave">Sick Leave</option>
            <option value="Loss of Pay Leave">Loss of Pay Leave</option>
            <option value="Marriage Leave">Marriage Leave</option>

          </select>

          <label for="start-date" style="padding-top:30px">&nbsp;From date
          </label>
          <input id="start_date" class="form-content" type="date" name="start_date" required />
          <div class="form-border"></div>
          <label for="end-date" style="padding-top:30px">&nbsp;To date
          </label>
          <input id="end_date" class="form-content" type="date" name="end_date" required />
          <div class="form-border"></div>
          <p id="result"></p>

          <input id="submit-btn" type="submit" name="submit" value="APPLY" />

        </form>
      </div>
    </div>
  </div>
</body>

</html>