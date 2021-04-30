
<?php include("header.php"); ?>

       <br><br><br><br>

        
        <br><br>

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
            define('DB_HOST', 'localhost');
            define('DB_NAME', 'dipta');
            define('DB_USER','root');
            define('DB_PASSWORD','');

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
                               <a href="resorts.php">
                                <img <?php echo "src='admin/images/".$row['resort_img']."'"; ?>style="height: 250px" alt="">
                                </a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="resorts.php"><?php echo $row['type']; ?></a></h3>
                                <h3><a href="resorts.php"><?php echo $row['city']; ?></a></h3>
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
            </div>

        </section>
        <!-- Room End -->


       

<?php include("footer.php"); ?>