<?php

// Program For Contact Form

include_once("../../panel/DB.php");

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $contact = "INSERT INTO `tbl_contact`(`id`, `name`, `email`, `message`) VALUES (NULL,'$name','$email','$message')";
    $result = mysqli_query($connect,$contact);
    if($result){
        ?>
            <script>
                alert("Message Sent");
                window.location.assign("../user.php");
            </script>
        <?php
    }
}

?>