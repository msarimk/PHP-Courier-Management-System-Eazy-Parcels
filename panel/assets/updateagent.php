<?php

// Program For Updating Agent

include_once("../DB.php");

if(isset($_POST["submit"])){

    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    $username = $_POST["username"];
    $usertype = $_POST["usertype"];
    $branch = $_POST["branches"];
    $agentprofile_check = $_FILES["agentprofile"]["name"];

    if($agentprofile_check == ""){
        $update_agent = "UPDATE `tbl_users` SET `firstname`='$fname',`lastname`='$lname',
        `email`='$email',`password`='$password',`username`='$username',
        `branches`='$branch' WHERE `id` = '$id' ";
        $result = mysqli_query($connect,$update_agent);
        if($result){
            ?>
                <script>
                    alert("Agent Updated");
                    window.location.assign("../manageagent.php");
                </script>
            <?php
        }
    }
    elseif ($agentprofile_check != "") {
        $select = "SELECT * FROM `tbl_users` WHERE `id` = '$id' ";
        $result = mysqli_query($connect,$select);
            if(mysqli_num_rows($result)){
                while($data = mysqli_fetch_array($result)){
         
                     unlink("../user-profile/". $data["userimg"]);
         
                }

                $agentprofile_name = $_FILES["agentprofile"]["name"];
                $agentprofile_tmp = $_FILES["agentprofile"]["tmp_name"];
                $agentprofile_path = "../user-profile/" . $agentprofile_name;
                move_uploaded_file($agentprofile_tmp,$agentprofile_path);

                $update_agent = "UPDATE `tbl_users` SET `firstname`='$fname',`lastname`='$lname',
                `email`='$email',`password`='$password',`username`='$username',`userimg`='$agentprofile_name',
                `branches`='$branch' WHERE `id` = '$id' ";
                $result = mysqli_query($connect,$update_agent);
                    if($result){
                ?>
                    <script>
                        alert("Agent Updated");
                        window.location.assign("../manageagent.php");
                    </script>
                <?php
              
                    }
            }

    }
}
?>