
<?php
    $q = $_GET['q'];
	
    
    $con = mysqli_connect('localhost','root','');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,'dipta');
    $sql="SELECT hotel_id,room_no, room_type, room_price FROM room WHERE room_id = '".$q."'";
    $result = mysqli_query($con,$sql);
    
    
	while($row = mysqli_fetch_array($result)) {
        $hotel = $row['hotel_id'];
        $room = $row['room_no']; 
        $type = $row['room_type']; 
        $price = $row['room_price']; 

        $sql1="SELECT name, city FROM hotel WHERE id = $hotel";
        $result1 = mysqli_query($con,$sql1);
        while($row1 = mysqli_fetch_array($result1))
        {
            $hotel_name=$row1['name'];
            $city_name=$row1['city'];
        }

        echo "

        <label><h4>Hotel Name </h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='Hotel name' name='name' value='$hotel_name' readonly>
                      <br>
        <label><h4>City Name </h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='city name' name='city' value='$city_name' readonly>
        <br>
    

        <label><h4>Room No</h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' value='$room' name='room_no'>

            <br>

          <label><h4>Room Type</h4></label>
          <select class='form-control' name='room_type'>
            <option value='' hidden selected>$type</option>
            <option value='Single'>Single</option>
            <option value='Double'>Double</option>  
            <option value='Triple'>Triple</option>  
            <option value='Quad'>Quad</option>  
            <option value='Queen'>Queen</option>  
            <option value='King'>King</option>  
            <option value='Twin'>Twin</option>  
            <option value='Double-double'>Double-double</option>  
            <option value='Studio'>Studio</option>  
          </select>

            <br>

            <label><h4>Room Price</h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' value='$price' name='room_price'>
            


    ";
}
	
	
    mysqli_close($con);
    ?>