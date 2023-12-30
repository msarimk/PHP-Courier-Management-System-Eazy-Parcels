<?php
include_once("./session_start.php");
include("../panel/DB.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Eazy Parcels | Courier</title>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <script src="../src/js/jquery-3.5.1.min.js"></script>


  </head>

  <body oncontextmenu="return false;">

<!-- Loader Program Using ( JQuery ) -->
<script>
  $(window).on("load", function () {
  setTimeout(function(){
    $(".loader").fadeOut("slow");
  },400)

});
</script>

    <!-- Page Loader -->
<div class="loader"></div>

      <!-- Tracking Section -->
  <section id="track" class="p-0" >
    <div class="container" >
      <div class="text-center">
        <div  class="d-flex justify-content-center" >
          <div class="col-xxl-12 my-0" style="background-color: #fff;width: 100%;border-bottom: 5px solid #f95c19; border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">

        <?php
          if(isset($_GET["tracking_no"])){
            $tracking_no = $_GET["tracking_no"];
            $track_no = "SELECT * FROM `tbl_couriers` WHERE `trackingno` = '$tracking_no'";
            $track_result = mysqli_query($connect,$track_no);
            if(mysqli_num_rows($track_result) > 0){
              if($track_data = mysqli_fetch_array($track_result)){
                if($track_data["delivered"] == 0){
      ?>
              <div class="container">
                <div style="border: 1px solid orange;margin:45px 0px 45px 0px" class="ps-2 pe-2 pb-3" >
      
                <div class="container d-flex justify-content-end mb-2">
                    <a class="py-2 px-3 track_a2" style="background-color: #f95c19;color: #fff;cursor:pointer" >
                      <button class="btn p-0 text-white track_b2" onclick="printpdf()"  >Print</button>
                      <i class="fas fa-download fa-sm text-white-50"></i>
                    </a>
                  </div>

                  <div id="mydata">

                  <div class="d-flex justify-content-start">
                    <img class="mt-3 mb-1 ps-5" width="200px" src="../panel/panel-logo/courier.png" alt="">
                  </div>

                  <div class="d-flex justify-content-center mt-2 mb-2" >
                    <p class="py-1 px-5 track_p2" style="background-color: #f95c19;color: #fff;border-radius: 50px;" >Shipment Status</p>
                  </div>

                    <p class="mb-1 text-center"><strong>Sender's Name : </strong><?php echo $track_data["sendername"] ?></p>
                    <p class="mb-1 text-center"><strong>Sender's Address : </strong><?php echo $track_data["senderaddress"] ?></p>
                    <p class="mb-1 text-center"><strong>Sender's Phone no : </strong><?php echo $track_data["senderphone"] ?></p>
                      <div class="d-flex justify-content-center mx-auto w-50">
                        <hr class="w-50 ">
                      </div>
                    <p class="mb-1 text-center"><strong>Product : </strong><?php echo $track_data["product"] ?></p>
                    <p class="mb-1 text-center"><strong>From Branch : </strong><?php echo $track_data["branches"] ?></p>
                      <div class="d-flex justify-content-center mx-auto w-50">
                        <hr class="w-50 ">
                      </div>
                    <p class="mb-1 text-center"><strong>Reciever's Name : </strong><?php echo $track_data["recievername"] ?></p>
                    <p  class="mb-1 text-center"><strong>Reciever's Address : </strong><?php echo $track_data["recieveraddress"] ?></p>
                    <p class="mb-1 text-center"><strong>Reciever's Phone no : </strong><?php echo $track_data["recieverphone"] ?></p>
                      <div class="d-flex justify-content-center mx-auto w-50">
                        <hr class="w-50 ">
                      </div>
                    <p class="mb-1 text-center"><strong>Order Date : </strong><?php echo $track_data["bookingdate"] ?></p>
                    <p class="mb-1 text-center"><strong>Delivery Date : </strong><?php echo $track_data["deliverydate"] ?></p>

                    
                  <!-- Program For Converting DOM Data into PDF Printed Form -->
                    <script>

                      function printpdf(){
                        let data = document.getElementById("mydata");
      
                        let printed = html2pdf().from(data).save();

                        if(printed){
                          setInterval(function(){
                            window.location.assign("./user.php")
                          },350)
                        }
                        
                      }
                    </script>
                              
      <?php
                  if($track_data["inprogress"] == 1){
      ?>
                    <p class="mb-1 text-center"><strong>Shipment Status : </strong><?php echo "In Progress" ?></p>
                  </div>
      <?php
                  }
      ?>
                </div>
              </div>
      <?php
                }
                else{
      ?>
                  <div class="container">
                    <div style="border: 1px solid orange;" class="ps-2 pe-2 pb-3 pt-3 mt-5 mb-5" >
                      <p class="mb-1"><strong>Shipment Status : </strong><?php echo "Your Shipment has been delivered" ?></p>
                    </div>
                  </div>
      <?php
                }
              }
            }
            else{
      ?>
              <div class="container">
                <div style="border: 1px solid orange;" class="ps-2 pe-2 pb-3 pt-3 mt-5 mb-5" >
                  <p class="mb-1"><strong> Data Not Found </strong></p>
                </div>
              </div>
      <?php
            }
          }
        ?>
        
      </div> 
    </div>
  </div>
</section>
<!-- Tracking Section End -->
    
</body>

    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="./js/html2pdf.bundle.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    
</html>