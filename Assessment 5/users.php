<?php
if(isset($_POST['submit'])) {
    $fname=$_POST['name'];
    $femail=$_POST['email'];
    $fphone=$_POST['phone'];
    $fage=$_POST['age'];
    $fpassword=$_POST['password'];
    $xml=new DOMDocument("1.0","UTF-8");
    $xml->formatOutput=true;
    $xml->preserveWhiteSpace=false;
    $xml->load("users.xml");
    if(!$xml) {
        $users=$xml->createElement("users");
        $xml->appendChild($users);
    }
    else {
        $users=$xml->firstChild;
    }
    $user=$xml->createElement("user");
    $users->appendChild($user);
    
    $name=$xml->createElement("name", $fname);
    $user->appendChild($name);
    $email=$xml->createElement("email", $femail);
    $user->appendChild($email);
    $phone=$xml->createElement("phone", $fphone);
    $user->appendChild($phone);
    $age=$xml->createElement("age", $fage);
    $user->appendChild($age);
    $password=$xml->createElement("password", $fpassword);
    $user->appendChild($password);
    echo"<xmp>".$xml->saveXML()."</xmp>";
    $xml->save("users.xml");
}
?>