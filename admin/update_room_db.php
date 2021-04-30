
<?php
$id=$_POST['room_id'];
$no = $_POST["room_no"];
$type = $_POST["room_type"];
$price = $_POST["room_price"];

	define('DB_HOST','localhost');
	define('DB_NAME','dipta');
	define('DB_USER','root');
	define('DB_PASSWORD','');

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

	mysql_query("UPDATE ROOM SET ROOM_TYPE = '$type', ROOM_PRICE = '$price' WHERE ROOM_ID='$id'");

	mysql_close($con);

	header("Location: ./admin_dashboard.php");
?>