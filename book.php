<?php include("header.php"); 
include("conn.php");?>

<?php 
$id = $_GET['id'];


$result = mysql_query("SELECT * FROM room INNER JOIN hotel ON room.hotel_id=hotel.id WHERE room_id='$id';");
  while($row = mysql_fetch_array($result))
  {
    $hname= $row['name'];
    $rno= $row['room_no'];
    $rtype= $row['room_type'];
    $rprice= $row['room_price'];
    $cmail= $row['name'];

    $cityname=$row['city'];
    
    $user_email=$_SESSION['email'];
  }
  mysql_close($con);
?>

<script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
            document.getElementById("numdays22").value=GetDays();
            var price = document.getElementById("r_price").value;
            document.getElementById("ammount").value= price * GetDays();
            document.getElementById("ammount1").value= price * GetDays();
        }  
    }

    </script>

 <br><br><br>
  <br><br><br>
    <div class="booking-area">
        <div class="container">
           <div class="row ">
           <div class="col-12">
            <form action="pay.php" method="POST">
                 
            <div class="booking-wrap d-flex justify-content-between align-items-center">
             
                
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span> Hotel Name:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="text" name="hotel_name" value="<?php echo "$hname"; ?>" disabled>
                        <input type="hidden" name="hotel_name" value="<?php echo "$hname"; ?>">
                    </div>
               </div>
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span>City Name:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="text" name="city_name" value="<?php echo "$cityname"; ?>" disabled>
                        <input type="hidden" name="city_name" value="<?php echo "$cityname"; ?>">
                    </div>
               </div>
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span>Room Number:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="text" name="room_no" value="<?php echo "$rno"; ?>" disabled>
                        <input type="hidden" name="room_no" value="<?php echo "$rno"; ?>">
                    </div>
               </div>
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span>Room Type:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="text" name="room_type" value="<?php echo "$rtype"; ?>" disabled>
                        <input type="hidden" name="room_type" value="<?php echo "$rtype"; ?>">
                    </div>
               </div>
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span>Room Price:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input id="r_price" type="text" name="room_price" value="<?php echo "$rprice"; ?>" disabled>
                        <input id="r_price" type="hidden" name="room_price" value="<?php echo "$rprice"; ?>">
                    </div>
               </div>
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span>Customer Email:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="text" name="user_email" value="<?php echo($user_email); ?>" disabled>
                        <input type="hidden" name="user_email" value="<?php echo($user_email); ?>">
                    </div>
               </div>
           

            </div> 

            <div class="booking-wrap d-flex justify-content-between align-items-center">
             
                <div class="single-select-box pt-45 mb-30">
                	<h1 class="btn select-btn" onclick="cal()">Select Date</h1><!-- 
                    <a href="#" class="btn select-btn"></a> -->
               </div>

                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span> Check In Date:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="date" class="textbox" id="pick_date" name="pickup_date" onchange="cal()" required/>
                    </div>
               </div>
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span>Check OutDate:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="date" class="textbox" id="drop_date" name="dropoff_date" onchange="cal()" required/>
                    </div>
               </div>
               
                <!-- <div class="single-select-box pt-45 mb-30">
                    <a href="#" class="btn select-btn">Pay</a>
               </div> -->
           

            </div> 

            <div class="booking-wrap d-flex justify-content-between align-items-center">
             
                
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span> No of Days: </span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="text" class="textbox" id="numdays2" name="numdays" disabled="" />
                        <input type="hidden" class="textbox" id="numdays22" name="numdays" value="" />
                    </div>
               </div>
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span>Total Ammount:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input id="ammount" type="text" name="ammount" value="" disabled>
                        <input id="ammount1" type="hidden" name="ammount" value="" >
                    </div>
               </div>
                <div class="single-select-box pt-45 mb-30">
                    <input type="submit" name="Pay" value="Pay" class="btn select-btn">
               </div>

            </div>
        </form>
           </div>
           </div>
        </div>
    </div>

    <br><br><br>
    

<?php include("footer.php"); ?>