<?php
	include "conn.php";
	session_start();
	$error = "username/password incorrect";
	$admin_name = $_REQUEST["admin_name"];
	$password = $_POST["password"];
	$error = "username/password incorrect";
	
	$result=mysql_query("SELECT admin_name,password FROM admin_table  WHERE admin_name='$admin_name' AND password='$password'");
	echo("<br>");
	if($row=mysql_fetch_array($result))
	{
		$_SESSION["admin_name"]= $row['admin_name'];
		$_SESSION["password"]= $row['password'];
	}
	
	if ($_SESSION["admin_name"] != null & $_SESSION["password"] != null)
	{
		mysql_close($con);
		header("Location:./admin_dashboard.php"); 
	} 
	else 
	{
		mysql_close($con);
		$_SESSION["error"] = $error;
		header("Location:./Admin_login.php"); 
	}

?>
