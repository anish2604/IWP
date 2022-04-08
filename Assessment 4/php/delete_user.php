<?php

    $email=$_POST['email'];
    $password=$_POST['pass'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "IWPAssessment_19BCE0884";
    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    echo "<h1 style=\"color: green;\">User Deleted Successfully</h1>";

    $sql = "DELETE FROM `users` WHERE email = '$email' AND password = '$password'";
    if ($conn->query($sql) === TRUE) {
    echo "<h3 style=\"color: red;\">User Deleted Successfully</h3>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>