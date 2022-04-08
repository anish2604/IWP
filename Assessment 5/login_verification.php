<?php
$email=$_POST['email'];
$password=$_POST['password'];

$xml=simplexml_load_file(__DIR__ . "/users.xml");
$check=false;
foreach($xml->children() as $user) {
    if($user->email == $email && $user->password == $password && !$check) {
        echo "<p style=\"color: green; display: flex; justify-content: center; margin: auto; font-size: 3.2rem;\">User authenticated successsfully</p>";
        $check = true;
    }
}
if(!$check) {
    echo "<p style=\"color: red; display: flex; justify-content: center; margin: auto; font-size: 3.2rem;\">User not authenticated successsfully</p>";
}
?>