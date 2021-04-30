
<?php
    $q = $_GET['q'];
	
    
    $con = mysqli_connect('localhost','root','');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,'dipta');
    $sql="SELECT id,name,city,type,price,resort_img FROM resort WHERE city = '".$q."'";
    $result = mysqli_query($con,$sql);
    
    echo "<tr>
      <th>Name</th>
      <th>City</th>
      <th>Type</th>
      <th>Price</th>
      <th>Image</th>
      <th>Action</th>
      
    </tr>";
    
	while($row = mysqli_fetch_array($result)) {
        $name= $row['name']; 
        $city= $row['city'];
        $type= $row['type'];
        $price= $row['price'];
        $id = $row['id'];
    echo "
    <tr>
      <td>$name</td>
      <td>$city</td>
      <td>$type</td>
      <td>$price</td>
      <td><img src='admin/images/".$row['resort_img']."' height = '130px' width = '200px'></td>
      <td><a href='bookr.php?id=".$id."'>Book</a></td>
    </tr>
    ";
}
	
	
    mysqli_close($con);
    ?>