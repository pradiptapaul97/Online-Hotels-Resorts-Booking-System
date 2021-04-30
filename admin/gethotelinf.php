<?php
    $q = $_GET['q'];	
    $con = mysqli_connect('localhost','root','');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    mysqli_select_db($con,'dipta');
    $sql="SELECT name,city FROM hotel WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);
    
	while($row = mysqli_fetch_array($result)) {
        $name= $row['name']; 
        $city= $row['city']; 
    echo "
    <label><h4>Hotel Name </h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='Hotel name' name='name' value='$name' readonly>
                      <br>
        <label><h4>City Name </h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='city name' name='city' value='$city' readonly>
        <br>

        <label><h4>Enter Room No</h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='Room No' name='room_no'>

            <br>

          <label><h4>Select Room Type</h4></label>
          <select class='form-control' name='room_type'>
            <option value='' hidden selected>Select Room Type :-</option>
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

            <label><h4>Enter Room Price</h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='Room Price' name='room_price'>
            
    ";
}
mysqli_close($con);
?>