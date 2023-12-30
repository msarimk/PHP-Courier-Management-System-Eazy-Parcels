<?php

// Program For Creating Agent

include_once("../DB.php");

if(isset($_POST["submit"])){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    $username = $_POST["username"];
    $usertype = $_POST["usertype"];
    $branches = $_POST["branches"];

    $agentprofile_name = $_FILES["agentprofile"]["name"];
    $agentprofile_tmp = $_FILES["agentprofile"]["tmp_name"];
    $agentprofile_path = "../user-profile/" . $agentprofile_name;
    move_uploaded_file($agentprofile_tmp,$agentprofile_path);


    $create_agent = "INSERT INTO `tbl_users`(`id`, `firstname`, `lastname`, `email`, `password`, `username`,
     `usertype`, `userimg`, `branches`) VALUES (NULL,'$fname','$lname','$email','$password',
     '$username','$usertype','$agentprofile_name','$branches')";

    $result = mysqli_query($connect,$create_agent);
    if($result){
        ?>
            <script>
                alert("Agent Created");
                window.location.assign("../createagent.php");
            </script>
        <?php
    }

}

?>