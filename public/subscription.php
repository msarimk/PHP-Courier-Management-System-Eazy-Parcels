<?php

// Program For Subscription Form Using [ AJAX ]

include_once("../panel/DB.php");

if(isset($_POST["subscribe"])){

    $email = $_POST["subscribe"];
    $contact = "INSERT INTO `tbl_subscription`(`id`, `email`) VALUES (NULL,'$email')";
    mysqli_query($connect,$contact);

}

?>