<?php

// Program For Sending Mails

include_once("../DB.php");

if(isset($_POST["sendmail"])){

    $remail = $_POST["remail"];
    $rmessage = $_POST["rmessage"];

$to_mail = $remail;
$subject = "Eazy Parcels Alert";
$body = $rmessage;
$from = "Eazy Parcels";
$headers = "FROM: $from";
$result = mail($to_mail,$subject,$body,$headers);
if($result){
    ?>
        <script>
            alert("Mail Successfully Sent");
            window.location.assign("../sendemails.php");
        </script>
    <?php
}
}

?>