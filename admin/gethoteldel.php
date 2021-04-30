
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
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='Hotel name' name='name' value='$name'>
                      <br>
        <label><h4>City Name </h4></label>
            <input type='text' class='form-control' aria-describedby='emailHelp' placeholder='city name' name='city' value='$city'>

        <br>
            <input type='submit' name='submit' value='delete Hotel' class='btn btn-primary btn-user btn-block'>


    ";
}
	
	
    mysqli_close($con);
    ?>