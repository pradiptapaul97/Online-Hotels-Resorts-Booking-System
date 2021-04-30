<?php include("header.php"); ?>

        <!-- Booking Room Start
        <div class="booking-area">
            <div class="container">
               <div class="row ">
               <div class="col-12">
                <form action="">
                     
                <div class="booking-wrap d-flex justify-content-between align-items-center">
                 
                    // select in date 
                    <div class="single-select-box mb-30">
                        // select out date
                        <div class="boking-tittle">
                            <span> Check In Date:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker1"  placeholder="10/12/2020" />
                        </div>
                   </div>
                    // Single Select Box 
                    <div class="single-select-box mb-30">
                        // select out date 
                        <div class="boking-tittle">
                            <span>Check OutDate:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker2"  placeholder="12/12/2020" />
                        </div>
                   </div>
                    // Single Select Box 
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Adults:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   </div>
                    //-- Single Select Box 
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Children:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select2">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   </div>
                    //-- Single Select Box 
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Rooms:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select3">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   </div>
                    //-- Single Select Box 
                    <div class="single-select-box pt-45 mb-30">
                        <a href="#" class="btn select-btn">Book Now</a>
                   </div>
               

                </div> 
            </form>
               </div>
               </div>
            </div>
        </div>
        // Booking Room End-->

       <br><br><br><br>

        <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Hotel Rooms</h3>
                            </div>
                            <h3 class="archivment-back">Hotal Rooms</h3>
                        </div>
                    </div>
                </div>

                <?php
            define('DB_HOST', 'localhost');
            define('DB_NAME', 'dipta');
            define('DB_USER','root');
            define('DB_PASSWORD','');

            $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
            $db=mysql_select_db(DB_NAME,$con) or die(mysql_error());

            $result = mysql_query("SELECT * FROM room INNER JOIN hotel ON room.hotel_id=hotel.id");
          ?>


                <div class="row">
                    <?php
                    while($row = mysql_fetch_array($result))
                    {
                        $id=$row['room_id'];

                        ?>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="">
                                <img <?php echo "src='admin/images/".$row['room_image']."'"; ?>style="height: 250px" alt="">
                                </a>
                            </div>
                            <div class="room-caption">
                                <h3><a href=""><?php echo $row['room_type']; ?></a></h3>
                                <h3><a href=""><?php echo $row['city']; ?></a></h3>
                                <div class="per-night">
                                    <span><u>₹</u><?php echo $row['room_price']; ?> <span>/ par night</span>&nbsp;&nbsp;&nbsp;&nbsp; <strong><span><?php echo "<a href='book.php?id=".$id."'>Book</a>"; ?></span></strong></span>
                                </div>
                            </div>
                        </div>
                    </div>

                        <?php
              
             
            }
            mysql_close($con); ?>
                </div>
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="book_hotel.php" class="btn view-btn1">View more  <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->


        <br><br>


        <!-- Resouts Start https://www.thrillophilia.com/top-10-luxury-resorts-in-india-->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Resorts</h3>
                            </div>
                            <h3 class="archivment-back">Resorts</h3>
                        </div>
                    </div>
                </div>
                <?php
            

            $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
            $db=mysql_select_db(DB_NAME,$con) or die(mysql_error());

            $result = mysql_query("SELECT * FROM resort");
          ?>


                <div class="row">
                    <?php
                    while($row = mysql_fetch_array($result))
                    {
                        $id = $row['id'];
                        ?>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="">
                                <img <?php echo "src='admin/images/".$row['resort_img']."'"; ?>style="height: 250px" alt="">
                                </a>
                            </div>
                            <div class="room-caption">
                                <h3><a href=""><?php echo $row['type']; ?></a></h3>
                                <h3><a href=""><?php echo $row['city']; ?></a></h3>
                                <div class="per-night">
                                    <span><u>₹</u><?php echo $row['price']; ?> <span>/ par night</span>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo "<a href='bookr.php?id=".$id."'>Book</a>"; ?></span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                        <?php
              
             
            }
            mysql_close($con); ?>
                </div>
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="book_resort.php" class="btn view-btn1">View more  <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>

        </section>
        <!-- Resturent End -->

        <!-- Dining Start --
        <div class="dining-area dining-padding-top">
            <-- Single Left img --
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Our resturent</span>
                                <h3>Dining & Drinks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <-- single Right img --
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Our Pool</span>
                                <h3>Swimming Pool</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More  <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <-- Dining End  -->
        <br>
        <br>
        <br>
<?php include("footer.php"); ?>