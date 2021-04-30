<?php 
	include "conn.php";
	session_start();
	$admin_name=$_SESSION["admin_name"];
    $password=$_SESSION["password"];
    $new_password = $_POST["new_password"];
    $old_password = $_POST["old_password"];

    if($old_password == $password)
    {
    	$result=mysql_query("UPDATE admin_table SET password='$new_password'  WHERE admin_name='$admin_name'");
    	$_SESSION["password"]=$new_password;
    	header("Location:./admin_dashboard.php");
    }
    else
    {
    	//
    }


?>
