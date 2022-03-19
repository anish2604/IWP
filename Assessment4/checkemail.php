<?php
$q  = $_REQUEST["q"];
try{
    $conn = mysqli_connect('localhost', 'root', '', 'iwpassessment_19bce0884');
} catch(Exception $e){
    echo "Connection to database failed. ";
}
echo "Connected successfully to database. ";
if ($q !== "") {
    $sql_query = "SELECT * FROM users WHERE email='$q'";
    $result = mysqli_query($conn, $sql_query);
    if(mysqli_num_rows($result) > 0){
        echo "Email already registered in database. ";
    }else{
        echo "Email ID is available. ";
    }
};

