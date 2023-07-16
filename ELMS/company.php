<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>COMPANY</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- <style>
body {
  background-image: url('com_pic.jpg');
  
}
</style> -->
    <header>
        <a href="index.html" class="logo-link"><img src="HOME LOGO.jpg" alt="logo" width="50" height="50"></a>

    </header>
    
    <center><img align="right" src="company_pic.jpg" alt="front pic" width="750" height="550"></center>
    <main>
        <h5>SELECT YOUR COMPANY</h5>
        <?php
        $server = "localhost";
        $username = "root";
        $password = "Sejal@2004";

        $con = mysqli_connect($server, $username, $password);
        $sql = "SELECT company_id, company_name FROM `project`.`company`;";
        $result = mysqli_query($con, $sql);
        ?>
        <div class="select">
            <form method="post" id="form1" action="company_home.php">
                <select style= "width: 700px; height: 40px; padding-left: 280px ;background-color:#DAF5FF;">

                    <option value="" selected></option>

                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>

                        <option value="<?php echo $row["company_id"] , $row["company_name"]?>"><?php echo $row["company_id"], $row["company_name"] ?></option>

                        <?php
                    }
                    ?>
                </select>
                <input id="submit-btn1" type="submit" name="submit" value="SELECT" />
            </form>
        </div>
    </main>

</body>

</html>