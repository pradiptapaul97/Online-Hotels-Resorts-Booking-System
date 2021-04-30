<?php session_start() ?>
<?php
	include("conn.php");
    $admin_name=$_SESSION["admin_name"];
    $password=$_SESSION["password"];
    if($admin_name==null)
    {
        header("Location:./Admin_login.php");
    }
	$name = $_POST["resort_name"];
    $city = $_POST["resort_city"];
    $type = $_POST["resort_type"];
    $price = $_POST["resort_price"];

    if(isset($_FILES['image'])){
      $errors= array();

      

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         move_uploaded_file ($file_tmp,'images/'.$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

    mysql_query("INSERT INTO RESORT(name, city, type, price, resort_img)VALUES('$name','$city', '$type', '$price','$file_name')");
    mysql_close($con);

    header("Location: ./admin_dashboard.php");


?>