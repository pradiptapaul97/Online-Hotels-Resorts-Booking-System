<?php include("header.php");?>

<?php 
$hotel_name = $_POST['hotel_name'];
$city_name = $_POST['city_name'];
$room_type = $_POST['room_type'];
$user_email = $_POST['user_email'];
$total_price = $_POST['room_price'];
$entry_date = $_POST['pickup_date'];
$exit_date = $_POST['dropoff_date'];
$card_no = $_POST['card_no'];
$status = "Success";

mail("paulpradipta53@gmail.com","Success","Resort Booked");

include("conn.php");

mysql_query("INSERT INTO RESORT_BOOK(name, city, type, email, r_cost, date_from, date_to, card, status)VALUES('$hotel_name','$city_name','$room_type','$user_email','$total_price','$entry_date','$exit_date','$card_no','$status')");


mysql_close($con);

?>



<br><br><br>
  <br><br><br>
    <div class="booking-area">
        <div class="container">
           <div class="row ">
           <div class="col-12">
           <form action="reciept.php" method="POST">
           <div class="booking-wrap d-flex justify-content-between align-items-center">
             
                
             <div class="single-select-box mb-30">
                 <div class="boking-tittle">
                     <span> Resort Name:</span>
                 </div>
                 <div class="boking-datepicker">
                     <input type="text" name="hotel_name" value="<?php echo "$hotel_name"; ?>" disabled>
                     <input type="hidden" name="hotel_name" value="<?php echo "$hotel_name"; ?>">
                 </div>
            </div>
             <div class="single-select-box mb-30">
                 <div class="boking-tittle">
                     <span>City Name:</span>
                 </div>
                 <div class="boking-datepicker">
                     <input type="text" name="city_name" value="<?php echo "$city_name"; ?>" disabled>
                     <input type="hidden" name="city_name" value="<?php echo "$city_name"; ?>">
                 </div>
            </div>
             
             <div class="single-select-box mb-30">
                 <div class="boking-tittle">
                     <span>Resort Type:</span>
                 </div>
                 <div class="boking-datepicker">
                     <input type="text" name="room_type" value="<?php echo "$room_type"; ?>" disabled>
                     <input type="hidden" name="room_type" value="<?php echo "$room_type"; ?>">
                 </div>
            </div>

            <div class="single-select-box mb-30">
                <div class="boking-tittle">
                    <span>Date From:</span>
                </div>
                <div class="boking-datepicker">
                    <input type="text" class="textbox" id="pick_date" name="pickup_date" value="<?php echo "$entry_date"; ?>" disabled/>
                    <input type="hidden" class="textbox" id="pick_date" name="pickup_date" value="<?php echo "$entry_date"; ?>"/>
                </div>
            </div>
            <div class="single-select-box mb-30">
                <div class="boking-tittle">
                    <span>Date To:</span>
                </div>
                <div class="boking-datepicker">
                    <input type="text" class="textbox" id="drop_date" name="dropoff_date" value="<?php echo "$exit_date"; ?>" disabled/>
                    <input type="hidden" class="textbox" id="drop_date" name="dropoff_date" value="<?php echo "$exit_date"; ?>"/>
                </div>
            </div>


             <div class="single-select-box mb-30">
                 <div class="boking-tittle">
                     <span>Total Cost:</span>
                 </div>
                 <div class="boking-datepicker">
                     <input id="r_price" type="text" name="room_price" value="<?php echo "$total_price"; ?>" disabled>
                     <input id="r_price" type="hidden" name="room_price" value="<?php echo "$total_price"; ?>">
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
             
                
                <div class="single-select-box mb-30">
                    <div class="boking-tittle">
                        <span> Card No: </span>
                    </div>
                    <div class="boking-datepicker">
                        <input type="text" class="textbox" id="numdays2" name="card_no" value="<?php echo"$card_no"; ?>" disabled/>
                    </div>
               </div>
                <div class="single-select-box pt-45 mb-30">
                    <input type="text" name="Pay" value="Booking Confirm" class="btn select-btn" disabled>
               </div>

                <div class="single-select-box pt-45 mb-30">
                    <a href="home.php"><input type="text" name="back" value="Back To Home Page" class="btn select-btn" disabled></a>
               </div>

            </div>

           </div>
           </div>
        
        </form>

        </div>
        </div>
        </div>
    </div>

    <br><br><br>
    

<?php include("footer.php"); ?>

