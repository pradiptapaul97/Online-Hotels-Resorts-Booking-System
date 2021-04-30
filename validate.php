<?php
	include("conn.php");

	$fname = $_POST["fname"];
  
	$lname = $_POST["lname"];
  
	$email = $_POST["email"];
  
	$pass = $_POST["pass"];
  

	mysql_query("INSERT INTO DIPTA_USERS(fname, lname, email, pass)VALUES('$fname','$lname','$email','$pass')");

	//$sql = "INSERT INTO DIPTA_USERS(fname, lname, email, pass)VALUES('$fname','$lname','$email','$pass')";
	//if (mysqli_query($conn, $sql)) 
	//{
	//	mysqli_close($conn);
	//} 
	//else 
	//{
	//	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	//}

	header("Location: ./index.php"); 


	
?>

<!-- $password = 'user-input-pass';

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    echo 'Strong password.';
} -->