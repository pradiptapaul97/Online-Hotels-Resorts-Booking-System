<?php session_start() ?>
<?php
	session_destroy();
	header("Location:./Admin_login.php");
?>