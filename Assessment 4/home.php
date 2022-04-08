<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <h2 style="position: absolute; text-align: center;font-size: 5rem; color: yellow; padding: 2rem auto; top: 0;">Welcome</h2>
    <a class="logout" style="position: absolute; top:0; left:0; " href="login.php"> Logout </a>

    <a class="logout" style="position: absolute; top:0; right:2%; " href="update.php"> Update Details </a>
    <a class="logout" style="position: absolute; top:0; right:14%; " href="delete.php"> Delete User </a>

</body>
</html>