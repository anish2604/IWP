<?php>

    $q = $_REQUEST["q"];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "IWPAssessment_19BCE0884";
    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "<h1 style=\"color: green;\">Database Connected Successfully</h1>";

    $hint = "";

    if($q !== SELECT email FROM db) {
        
    }

    echo $hint === "" ? "no suggestion" : $hint;

?>