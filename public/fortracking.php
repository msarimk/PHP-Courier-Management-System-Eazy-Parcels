<?php

// Program For Tracking Consignment No Using [ AJAX ]

include_once("../panel/DB.php");

if(isset($_POST["track"])){

  $trackingno = $_POST["track"];
  $match_no = "SELECT * FROM `tbl_couriers` WHERE `trackingno` = '$trackingno'";
  $match_result = mysqli_query($connect,$match_no);

  if(mysqli_num_rows($match_result) > 0){
    if($match_data = mysqli_fetch_array($match_result)){

  $status = $match_data["delivered"];
  $track_match = $match_data["trackingno"];

    if($status == 0){
            if($trackingno >= 0){
            ?>
                <a id="main_btn" type="submit" href="./trackstatus.php?tracking_no=<?php echo $trackingno ?>" class="py-2 px-3 track_a1 text-white" style="background-color: #f95c19;color: #fff;cursor:pointer" >
                    Track
                </a>
            <?php
            }
    }
    else{
        ?>
                    <div class="container p-0">
                      <div style="border: 1px solid orange;padding-bottom:12px" class="ps-2 pe-2 pt-3 mt-3 mb-3" >
                        <p class="mb-1"><strong>Shipment Status : </strong><?php echo "Your Shipment has been delivered" ?></p>
                      </div>
                    </div>
        <?php
                  }
    }

              }
              else{
                ?>
                        <div class="container p-0 ">
                          <div style="border: 1px solid orange; padding-bottom:12px" class="ps-2 pe-2  pt-3 mt-3 mb-3 " >
                            <p class="mb-1 text-danger"><strong> Data Not Found </strong></p>
                          </div>
                        </div>
                <?php
            }

}
?>