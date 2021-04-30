
<?php
    $q = $_GET['q'];
	
    
    $con = mysqli_connect('localhost','root','');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,'dipta');
    $sql="SELECT name,city,type,price FROM resort WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);
    
    
	while($row = mysqli_fetch_array($result)) {
        $name= $row['name']; 
        $city= $row['city']; 
        $type= $row['type']; 
        $price= $row['price']; 
    echo "
    <div class='form-group'>
          <label><h4>Resort Name </h4></label>
          <input type='text' class='form-control' id='exampleInputEmail' aria-describedby='emailHelp' value='$name' name='resort_name'>
        </div>
        <div class='form-group'>
          <label><h4>City Name </h4></label>
          <input type='text' class='form-control' id='exampleInputEmail' aria-describedby='emailHelp' value='$city' name='resort_city'>
        </div>

        <br>

          <label><h4>Resort Type</h4></label>
          <select class='form-control' name='resort_type'>
            <option value='$type' hidden selected>$type</option>
            <option value='Hill Stations'>Hill Stations</option>
            <option value='Beach Resorts'>Beach Resorts</option>  
            <option value='River Resorts'>River Resorts</option>  
            <option value='Island Resorts'>Island Resorts</option>  
            <option value='Speciality Resorts'>Speciality Resorts</option>  
            <option value='Economy Resort'>Economy Resort</option>  
            <option value='Luxury Resorts'>Luxury Resorts</option>  
            <option value='Super Luxurious Resorts'>Super Luxurious Resorts</option> 
          </select>

        <br>

        <div class='form-group'>
          <label><h4>Enter Resort Price </h4></label>
          <input type='text' class='form-control' id='exampleInputEmail' aria-describedby='emailHelp' value='$price' name='resort_price'>
        </div>

        <br>
        <input type='submit' name='submit' value='Delete Resort' class='btn btn-primary btn-user btn-block'>


    ";
}
	
	
    mysqli_close($con);
    ?>