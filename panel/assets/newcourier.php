<?php

// Program For Adding Courier

include_once("../DB.php");

if (isset($_POST["submit"])) {

  $order_date = $_POST["orderdate"];
  $company = $_POST["company"];
  $branches = $_POST["branches"];
  $sender_name = $_POST["sendername"];
  $sender_phone = $_POST["senderphone"];
  $sender_address = $_POST["senderaddress"];
  $product = $_POST["product"];
  $reciever_name = $_POST["recievername"];
  $reciever_phone = $_POST["recieverphone"];
  $reciever_address = $_POST["recieveraddress"];
  $delivery_date = $_POST["deliverydate"];

  $tracking_no = rand(0000000000000, 9999999999999);

  // Code For Mailing
  $to_mail1 = $_POST["senderemail"];
  $to_mail2 = $_POST["recieveremail"];
  $all_mail = "$to_mail1,$to_mail2";
  $subject = "Shipment Alert";
  $body = "This email is inform to you, that your courier to $company of branch $branches is received from sender [ $sender_name ],
 your delivery date is [ $delivery_date ] and in order to track your parcel [ Your Tracking Consignment Number Is $tracking_no ]";
  $from = $company;
  $headers = "FROM: $from";
  mail($all_mail, $subject, $body, $headers);



  $add_courier = "INSERT INTO `tbl_couriers`(`id`,`couriercompany`,`branches`,`bookingdate`, `sendername`, `senderphone`, `senderaddress`,`senderemail`,
`product`, `recievername`, `recieverphone`, `recieveraddress`,`recieveremail`, `deliverydate`,`trackingno`) VALUES (NULL,'$company','$branches','$order_date',
'$sender_name','$sender_phone','$sender_address','$to_mail1','$product','$reciever_name','$reciever_phone','$reciever_address','$to_mail2','$delivery_date','$tracking_no')";

  $add = mysqli_query($connect, $add_courier);
  if ($add) {
?>
    <script>
      alert("Courier Added");
      window.location.assign("../newcourier.php");
    </script>
<?php
  }
}
$sarib = "hello"
?>