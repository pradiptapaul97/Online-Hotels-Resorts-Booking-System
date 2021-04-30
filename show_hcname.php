
<?php
    $q = $_GET['q'];
  
    
    $con = mysqli_connect('localhost','root','');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,'dipta');
    $sql="SELECT room_id,room_no,room_type,room_price,room_image FROM room WHERE hotel_id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<tr>
      <th>Room No</th>
      <th>Room Type</th>
      <th>Room Price/ Day</th>
      <th>Image</th>
      <th>Action</th>
    </tr>";
    
    
  while($row = mysqli_fetch_array($result)) {
        $room_no= $row['room_no']; 
        $room_type= $row['room_type'];
        $room_price = $row['room_price'];
        $id=$row['room_id'];
    echo "
    <tr>
      <td>$room_no</td>
      <td>$room_type</td>
      <td>$room_price</td>
      <td><img src='admin/images/".$row['room_image']."' height = '130px' width = '200px'></td>
      <td><a href='book.php?id=".$id."'>Book</a></td>
    </tr>
    ";
}
  
  
    mysqli_close($con);
    ?>