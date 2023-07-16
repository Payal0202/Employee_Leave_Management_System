
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      text-align: center;

    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      background-color: white;

    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      /* background-color: #04AA6D; */
      background-color: #bfdefa;
      color: black;
      text-align: center;
    }
  </style>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- The sidebar -->
  <div class="sidebar">
    <a class="active" href="#home">ELMS</a>
    <a href="employee.php">Dashboard</a>
    <a href="applyL.php">Apply Leave</a>
    <a style="background:#D6EAF8" href="leave_record.php">Leave Records</a>

  </div>
  <div class="content">
    <header>

      <h1>Leave Records</h1>

      <!-- <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a> -->
      <nav class="header-nav">

        <a href="index.html" class="button">LOG OUT</a>
      </nav>

    </header>

  </div>
  <?php
  
  $server = "localhost";
  $username = "root";
  $password = "Sejal@2004";

  $con = mysqli_connect($server, $username, $password);
  
  $sql1 = "SELECT type ,start_date, datediff(end_date,start_date) as days, status from `project`.`leave_request`;";
  $result1 = mysqli_query($con, $sql1);
  ?>
  <div class="content">
    <table cellspacing="80" id="customers">

      <tr>
        <th>LEAVE TYPE</th>
        <th>START DATE</th>
        <th>LEAVE DAYS COUNT</th>
        <th>STATUS</th>

      </tr>

      <!-- PHP CODE TO FETCH DATA FROM ROWS -->
      <?php
      // LOOP TILL END OF DATA
      while ($rows = $result1->fetch_assoc()) {
        ?>
        <tr>
          <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
          <td>
            <?php echo $rows['type']; ?>
          </td>
          <td>
            <?php echo $rows['start_date']; ?>
          </td>
          <td>
            <?php echo $rows['days']; ?>
          </td>
          <td>
            <?php echo $rows['status']; ?>
          </td>

        </tr>
        <?php
      }
      ?>
    </table>
  </div>

</body>

</html>