<?php

session_start();

$conn = mysqli_connect('localhost', 'root');
if($conn){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($conn, 'iwpassessment_19bce0884');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = "SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
}else{
    header('location:login.php');
}

setcookie("name", "Anish", time() - 86400);

?>