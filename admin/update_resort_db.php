
<?php
$id=$_POST['id'];
$name = $_POST["resort_name"];
$city = $_POST["resort_city"];
$type = $_POST["resort_type"];
$price = $_POST["resort_price"];
echo "$id";
echo "$hotel_name";
echo "$city_name";

	define('DB_HOST','localhost');
	define('DB_NAME','dipta');
	define('DB_USER','root');
	define('DB_PASSWORD','');

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

	mysql_query("UPDATE RESORT SET NAME = '$name', CITY = '$city', TYPE = '$type', PRICE='$price' WHERE ID='$id'");

	mysql_close($con);

	header("Location: ./admin_dashboard.php");
?>