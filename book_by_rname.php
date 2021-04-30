
<?php 
    include("conn.php");
    include("header.php");
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

        <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Book Resort By Name</h3>
                            </div>
                            <h3 class="archivment-back">Resort Booking</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                        <div class="boking-tittle">
                            <h1 style="font-family: inherit;"><span> Select Resort : &nbsp;&nbsp;</span></h1>
                        </div>
                        <div class="select-this">
                                <div class="select-itms">
                                    <select name="select" id="select2" onchange="showValue(this.value)">
                                      <option value='0'>Select</option>
                                      <?php
                                      $result = mysql_query("SELECT DISTINCT name FROM resort;");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            $rcity= $row['name'];
                                            echo "<option value='$rcity'>$rcity</option>";
                                          }
                                          mysql_close($con);
                                      ?>
                                    </select>
                                </div>
                        </div>
                   </div>

                   <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <table id="hh_info">
                          
                        </table>
                    </div>
                </div>

            </div>

        </section>
        <!-- Room End -->
        <br><br>
        <!-- Resturent End -->
        <br><br>

        <script>
            function showValue(str) {
              if (str == "") {
                document.getElementById("hh_info").innerHTML = "";
                return;
              } else { 
                if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp = new XMLHttpRequest();
                } else {
                  // code for IE6, IE5
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("hh_info").innerHTML = this.responseText;
                    //document.getElementById("cityid").innerHTML = this.responseText;
                  }
                };
                xmlhttp.open("GET","show_rname.php?q="+str,true);
                xmlhttp.send();
              }
            }
          </script>
<?php include("footer.php"); ?>