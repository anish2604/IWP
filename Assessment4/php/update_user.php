<?php

    $name=$_POST['name'];
    $email=$_POST['email'];    
    $phone=$_POST['phNo'];
    $age=$_POST['age'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "IWPAssessment_19BCE0884";
    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    echo "<h1 style=\"color: green;\">Database Connected Successfully</h1>";

    $sql = "UPDATE `users` SET name = '$name', phone = '$phone', age = '$age' WHERE email = '$email' AND password = '$password'";
    if ($conn->query($sql) === TRUE) {
    echo "<h3 style=\"color: blue;\">User Details updated successfully</h3>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>