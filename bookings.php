<?php 
    include("conn.php");
    include("header.php");
    $user_email=$_SESSION["email"];
?>

<style type="text/css">
  #hh_info tr td, #hh_info tr th{
    width: 33.3%;
    text-align: center;
    padding: 10px;
    border: 2px solid #ccc;
  }
  #hh_info tr th{
    background-color: #3adcbc;
  }
  #hr_info tr td, #hr_info tr th{
    width: 33.3%;
    text-align: center;
    padding: 10px;
    border: 2px solid #ccc;
  }
  #hr_info tr th{
    background-color: #3adcbc;
  }
  .room-btn{
    width: 100% !important;
  display: block; 
  }
</style>

       <br><br><br><br>
       <br><br>

       <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>My Bookings</h3>
                            </div>
                            <h3 class="archivment-back">Bookings</h3>
                        </div>
                    </div>
                </div>
            

                   <div class="row ">
                    <div class="room-btn pt-70" >
						    
          <?php

            $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
            $db=mysql_select_db(DB_NAME,$con) or die(mysql_error());


            $result = mysql_query("SELECT * FROM hotel_book WHERE email='".$user_email."'");
            ?>
            <table id="hh_info" width="100%" >
          <tr>
            <th>ORDER Id</th>
            <th>Hotel Name</th>
            <th>Hotel City</th>
            <th>Hotel Type</th>
            <th>Room NO</th>
            <th>Email</th>
            <th>Cost</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>Card Number</th>
            <th>Status</th>
          </tr>
          <?php
            while($row = mysql_fetch_array($result))
            {
              
              echo "
                    <tr>
                      <td>".$row['id']."</td>
                      <td>".$row['name']."</td>
                      <td>".$row['city']."</td>
                      <td>".$row['type']."</td>
                      <td>".$row['room_no']."</td>
                      <td>".$row['email']."</td>
                      <td>".$row['r_cost']."</td>
                      <td>".$row['date_from']."</td>
                      <td>".$row['date_to']."</td>
                      <td>".$row['card']."</td>
                      <td>".$row['status']."</td>
                    </tr>";
            }
            mysql_close($con);
          ?>
        </table>

        <br><br><br>
                
          <?php

            $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
            $db=mysql_select_db(DB_NAME,$con) or die(mysql_error());

            $result = mysql_query("SELECT ID,NAME,CITY,TYPE,DATE_FROM,DATE_TO,EMAIL,R_COST,CARD,STATUS FROM RESORT_BOOK WHERE EMAIL='".$user_email."'");
            ?>
            <table id="hh_info" width="100%" >
          <tr>
            <th>ORDER Id</th>
            <th>Resort Name</th>
            <th>Resort City</th>
            <th>Resort Type</th>
            <th>User Email</th>
            <th>Cost</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>Card Number</th>
            <th>Status</th>
          </tr>
          <?php
            while($row = mysql_fetch_array($result))
            {
              
              echo "
                    <tr>
                      <td>".$row['ID']."</td>
                      <td>".$row['NAME']."</td>
                      <td>".$row['CITY']."</td>
                      <td>".$row['TYPE']."</td>
                      <td>".$row['EMAIL']."</td>
                      <td>".$row['R_COST']."</td>
                      <td>".$row['DATE_FROM']."</td>
                      <td>".$row['DATE_TO']."</td>
                      <td>".$row['CARD']."</td>
                      <td>".$row['STATUS']."</td>
                    </tr>";
            }
            mysql_close($con);
          ?>
        </table>
                    </div>
                </div>

            </div>

        </section>
        <!-- Room End -->
        <br><br>
        <!-- Resturent End -->
        <br><br>     

<?php
    include("footer.php");
?>