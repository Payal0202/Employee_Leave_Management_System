<?php
if (isset($_POST['submit'])) {

    $server = "localhost";
    $username = "root";
    $password = "Sejal@2004";
    $dbname = "project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    // $employee_id = $_POST['employee_id'];
    $status = $_POST['status'];

    $q = "SELECT `employee_id` from `leave_request`;";
    $result = mysqli_query($con, $q);
    $row = mysqli_fetch_assoc($result);
    $employee_id = $row['employee_id'];

    $sql1 = "UPDATE `leave_request` SET `status` = '$status'";
    mysqli_query($con, $sql1);

    // if ($status === "Approved") {

    //     $sql1 = "UPDATE `leave_request` SET `status` = 'Approved'";
    //     mysqli_query($con, $sql1);

    // } else if ($status === "Cancelled") {

    //     $sql2 = "UPDATE `leave_request` SET `status` = 'Cancelled'";
    //     mysqli_query($con, $sql2);

    // } else {

    //     $sql3 = "UPDATE `leave_request` SET `status` = 'Pending'";
    //     mysqli_query($con, $sql3);

    // }
    header('Location: ad_dashboard.php');
    

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PORTAL</title>
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

        .button1 {
            display: block;
            background-color: #bfdefa;
            color: #000000;
            text-align: center;
            padding: 10px 20px;
            border-radius: 800px;
            font-size: 18px;
            text-decoration: none;
            margin-top: 120px;
            margin-bottom: 30px;
            width: 100px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <a class="active" href="#home">ELMS</a>
        <a href="admin.php">Dashboard</a>
        <a style="background:#D6EAF8" href="ad_dashboard.php">Leave Application</a>
        <a href="emp_signup.php">Add Employee</a>

    </div>
    <div class="content">
        <header>

            <h1>Leave Applications</h1>

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

    $sql = "SELECT employee.employee_id, employee.name, leave_request.type, leave_request.start_date, leave_request.status FROM `project`.`employee` JOIN `project`.`leave_request` ON employee.employee_id = leave_request.employee_id;";
    $result1 = mysqli_query($con, $sql);

    ?>
    <div class="content">
        <form method="post" class="form">
            <table cellspacing="80" id="customers">

                <tr>
                    <th>EMPLOYEE ID</th>
                    <th>EMPLOYEE NAME</th>
                    <th>POSTING DATE</th>
                    <th>TYPE</th>
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
                            <?php echo $rows['employee_id']; ?>
                            <input type="hidden" name="employee_id" value="<?php echo $rows['employee_id']; ?>">

                        </td>
                        <td>
                            <?php echo $rows['name']; ?>
                        </td>

                        <td>
                            <?php echo $rows['start_date']; ?>
                        </td>
                        <td>
                            <?php echo $rows['type']; ?>
                        </td>

                        <td>

                            <select name="status" id="type">
                                <!-- <option value="" style="color:yellow;font-weight:bold">Pending</option> -->
                                <option value=""></option>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                                <option value="Cancelled">Cancelled</option>

                            </select>
                        </td>

                    </tr>
                    <?php
                }
                ?>
            </table>

            <!-- <center><a href="admin.php" class="button1">APPLY CHANGES</a></center> -->
            <input id="submit-btn" type="submit" name="submit" value="APPLY" />

        </form>
    </div>
</body>

</html>