<?php

// Program For Registeration

include_once("../../panel/DB.php");

if(isset($_POST["submit"])){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    $username = $_POST["username"];

    $user_name = $_FILES["userimg"]["name"];
    $user_tmp = $_FILES["userimg"]["tmp_name"];
    $user_path = "../../panel/user-profile/" . $user_name;
    move_uploaded_file($user_tmp,$user_path);

    

    $create_user = "INSERT INTO `tbl_users`(`id`, `firstname`, `lastname`, `email`, `password`, `username`, `userimg`)
     VALUES (NULL,'$fname','$lname','$email','$password',
     '$username','$user_name')";

    $result = mysqli_query($connect,$create_user);
    if($result){
            session_start();
            session_unset();
            session_destroy();
        ?>
            <script>
                alert("Registered Successfully");
                window.location.assign("../../index.php");
            </script>
        <?php
    }
}

?>