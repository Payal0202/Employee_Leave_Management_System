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
    <a href="dashboard.php">Dashboard</a>
    <a style="background:#D6EAF8" href="applyL.php">Apply Leave</a>
    <a href="#Leave Records">Leave Records</a>
  </div>
  <!-- <div class="content">
    <h1>Apply Leave</h1>
  </div> -->
  <div class="content">
  <h1>Apply Leave</h1>
   
  <div class="card">
  <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
  <div class="container">
  <form method="post" action="" class="form" name="Register">
          <!-- <form method ="post" action="signup.php" class="form" name="Register" onsubmit="return validation()"> -->

          <label for="user-id" style="padding-top:20px">
            &nbsp;
          </label>
          <input id="user-id" class="form-content" type="id" name="id" placeholder="Employee ID" autocomplete="on" required />
          <div class="form-border"></div>
          <!-- <label for="leave-type" style="padding-top:9px">&nbsp;Leave Type
        </label>
        <input id="leave-type" class="form-content" type="name" name="leave-type" required />
        <div class="form-border"></div> -->
          <label for="leave-type" style="padding-top:30px"></label>

          <select name="leave-type" id="leave-type">
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
          <input id="start-date" class="form-content" type="date" name="end-date" required />
          <div class="form-border"></div>
          <label for="end-date" style="padding-top:30px">&nbsp;To date
          </label>
          <input id="end-date" class="form-content" type="date" name="end-date" required />
          <div class="form-border"></div>
          <p id="result"></p>

          <input id="submit-btn" type="submit" name="submit" value="APPLY" />

        </form>
  </div>
</div>
</div>
</body>

</html>

