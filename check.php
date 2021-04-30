<?php
	include "conn.php";
	session_start();
	$email = $_REQUEST["email"];
	$pass = $_POST["pass"];
	
	$result=mysql_query("SELECT fname,lname FROM dipta_users  WHERE email='$email' AND pass='$pass'");
	if($row=mysql_fetch_array($result))
	{
		$fname= $row['fname'];
		$lname= $row['lname'];
	}

	if ($fname != null)
	{
		$user_fname=$row['fname'];
		$user_lname=$row['lname'];
		$_SESSION["fname"]=$user_fname;
		$_SESSION["lname"]=$user_lname;
		$_SESSION["email"]=$email;
		mysql_close($con);
		header("Location:./home.php"); 
	} 
	else 
	{
		mysql_close($con);
		header("Location:./login.php"); 
	}

?>
