<?php

$server = "localhost";
$username = "root";
$password = "Sejal@2004";
$dbname = "project";

$con =mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("Connection to this database failed");
    mysqli_connect_error();
}
 else {
    $stmt = $con->prepare(" select * from login where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            echo "<h2>Login Successfully</h2>";
        } else {
            echo -"<h2>Invalid-Email or password</h2>";
        }
    } else {
        echo " <h2>Invalid Email or password</h2>";
    }
}
?>