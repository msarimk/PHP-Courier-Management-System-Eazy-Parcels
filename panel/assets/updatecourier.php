<?php

// Program For Updating Courier

include_once("../DB.php");

if(isset($_POST["submit"])){
  
  $id = $_POST["id"];
  $order_date = $_POST["orderdate"];
  $company = $_POST["company"];
  $sender_name = $_POST["sendername"];
  $sender_phone = $_POST["senderphone"];
  $sender_address = $_POST["senderaddress"];
  $product = $_POST["product"];
  $branches = $_POST["branches"];
  $status = $_POST["status"];
  $reciever_name = $_POST["recievername"];
  $reciever_phone = $_POST["recieverphone"];
  $reciever_address = $_POST["recieveraddress"];
  $delivery_date = $_POST["deliverydate"];
  $tracking_status = $_POST["trackingno"];
  $empty = "";
  $status_value = 1;

  // Code For Mailing
$to_mail1 = $_POST["senderemail"];
$to_mail2 = $_POST["recieveremail"];
$all_mail = "$to_mail1,$to_mail2";
$subject = "Delivery Alert";
$body = "Your shipment has been delivered [ Thank You To Choose Us ! ]";
$from = $company;
$headers = "FROM: $from";



  if($status == "inprogress"){
    $update_courier = "UPDATE `tbl_couriers` SET `couriercompany`='$company',`branches`='$branches',`bookingdate`='$order_date',`sendername`='$sender_name',
    `senderphone`='$sender_phone',`senderaddress`='$sender_address',`product`='$product',`recievername`='$reciever_name',
    `recieverphone`='$reciever_phone',`recieveraddress`='$reciever_address',`deliverydate`='$delivery_date', `inprogress`='$status_value' , `delivered`='$empty' WHERE `id` = $id";
  
    $update = mysqli_query($connect,$update_courier);
    if($update){
      ?>
        <script>
          alert("Courier Updated");
          window.location.assign("../allcourierdetail.php");
        </script>
      <?php
    }
  }

  elseif($status == "delivered"){
    mail($all_mail,$subject,$body,$headers);
    $update_courier = "UPDATE `tbl_couriers` SET `couriercompany`='$company',`branches`='$branches',`bookingdate`='$order_date',`sendername`='$sender_name',
    `senderphone`='$sender_phone',`senderaddress`='$sender_address',`product`='$product',`recievername`='$reciever_name',
    `recieverphone`='$reciever_phone',`recieveraddress`='$reciever_address',`deliverydate`='$delivery_date',`inprogress`='$empty' , `delivered`='$status_value' WHERE `id` = $id";
  
    $update = mysqli_query($connect,$update_courier);
    if($update){
      ?>
        <script>
          alert("Courier Updated");
          window.location.assign("../allcourierdetail.php");
        </script>
      <?php
    }
  }


}

?>