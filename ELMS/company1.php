<?php

$server = "localhost";
$username = "root";
$password = "Sejal@2004";
// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'Sejal@2004');
//     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // $stmt = $dbh->query('SELECT * FROM company');
//     // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     // Do something with the result set
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

try {
    // Establish PDO connection
    $pdo = new PDO('mysql:host=localhost;dbname=project', 'root', 'Sejal@2004');

    // Prepare SQL query
    $stmt = $pdo->prepare('SELECT * FROM company');
    // $stmt->bindParam(':company', $company);

    // Execute SQL query
    // $company = $_POST['company'];
    $stmt->execute();

    // Fetch results and process each row
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     // Do something with the row data
    //     echo $row['company_id'] . ' ' . $row['company_name'] . '<br>';
    // }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to this database failed");
    mysqli_connect_error();
}
// echo "Success connected";

// $company = $_POST['email'];
// $password = $_POST['password'];

// $sql = "SELECT comapny_id,company_name FROM `project`.`company`;";

// while ($row = $sql->fetch()) {
//     echo "<option value='" . $row['company_id'] . "'>" . $row['company_name'] . "</option>";
// }
// $stmt = $dbh->query("SELECT company_id,company_name FROM company");


// while ($row = $stmt->fetch()) {
//     echo "<option value='" . $row['company_id'] . "'>" . $row['company_name'] . "</option>";
// }



// if ($con->query($stmt) == true) {
//     echo "success";
// } else {
//     echo "Error: $sql <br> $con->error";
// }

$con->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>COMPANY</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>

    </header>
    <center><img align="right" src="company_pic.jpg" alt="front pic" width="750" height="450"></center>
    <main>
        <h5>SELECT YOUR COMPANY</h5>

        <form id="form1">
            <select style="width: 600px">
                <select>
                    <?php
                    // while ($row = $stmt->fetch()) {
                    //     echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                    // }
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        // Do something with the row data
                        echo $row['company_id'] . ' ' . $row['company_name'] . '<br>';
                    }
                    ?>


                </select>
                <!-- <a href="company.php"></a>  -->
                <!-- <option value='company.php'></option> 
                <option value='green'>Green</option>
              <option value='red'>Red</option>
              <option value='yellow'>Yellow</option>  -->
                <!-- <option value='company.php' selected>Company</option> -->
                <!-- <div>
                    <h2>
                        
                    </h2>
                    <p>
                        
                    </p>
                </div> -->
            </select>
        </form>
    </main>

</body>

</html>