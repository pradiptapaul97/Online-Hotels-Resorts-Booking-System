
<?php include("header.php"); ?>

       <br><br><br><br>

       <!-- <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="book_by_hname.php" class="btn view-btn1">Book Hotel By Hotel Name  <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </section>

        <br><br>


         Resouts Start https://www.thrillophilia.com/top-10-luxury-resorts-in-india
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="book_by_cname.php" class="btn view-btn1">Book Hotel By City Name  <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </section> -->

        
        <br><br>

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
                               <a href="rooms.php">
                                <img <?php echo "src='admin/images/".$row['room_image']."'"; ?>style="height: 250px" alt="">
                                </a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.php"><?php echo $row['room_type']; ?></a></h3>
                                <h3><a href="rooms.php"><?php echo $row['city']; ?></a></h3>
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
            </div>

        </section>
        <!-- Room End -->


       

<?php include("footer.php"); ?>