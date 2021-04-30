
<?php
    $q = $_GET['q'];
  
    
    $con = mysqli_connect('localhost','root','');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,'dipta');
    $sql="SELECT id,name,city,hotel_img FROM hotel WHERE name = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<tr>
      <th>Name</th>
      <th>City</th>
      <th>Image</th>
      <th>Action</th>
      
    </tr>";
    
    
  while($row = mysqli_fetch_array($result)) {
        $name= $row['name']; 
        $city= $row['city'];
        $id = $row['id'];
    echo "
    <tr>
      <td>$name</td>
      <td>$city</td>
      <td><img src='admin/images/".$row['hotel_img']."' height = '130px' width = '200px'></td>
      <td><a onclick='hcity($id);' class='btn view-btn1'> Check Rooms</a></td>
    </tr>
    ";
}
  
  
    mysqli_close($con);
    ?>