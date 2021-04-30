<?php

include("conn.php");

$message = $_POST["message"];
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];

mysql_query("INSERT INTO MESSAGE(text, name, email, subject)VALUES('$message','$name','$email','$subject')");
    mysql_close($con);

    header("Location: ./contact.php");

?>

