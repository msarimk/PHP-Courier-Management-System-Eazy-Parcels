<?php

// Program For Updating Customer

include_once("../DB.php");

if(isset($_POST["submit"])){

    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    $username = $_POST["username"];

    $customerprofile_check = $_FILES["customerprofile"]["name"];


    if($customerprofile_check == ""){
        $update_customer = "UPDATE `tbl_users` SET`firstname`='$fname',`lastname`='$lname',`email`='$email',`password`='$password',`username`='$username' WHERE `id` = '$id'";

        $result = mysqli_query($connect,$update_customer);
        if($result){
            ?>
                <script>
                    alert("Customer Updated");
                    window.location.assign("../managecustomerdetail.php");
                </script>
            <?php
        }
    }
    elseif ($customerprofile_check != ""){
        $select = "SELECT * FROM `tbl_users` WHERE `id` = '$id' ";
        $result = mysqli_query($connect,$select);
            if(mysqli_num_rows($result)){
                while($data = mysqli_fetch_array($result)){
     
                    unlink("../user-profile/". $data["userimg"]);
     
                }
            }

            $customerprofile_name = $_FILES["customerprofile"]["name"];
            $customerprofile_tmp = $_FILES["customerprofile"]["tmp_name"];
            $customerprofile_path = "../user-profile/" . $customerprofile_name;
            move_uploaded_file($customerprofile_tmp,$customerprofile_path);

            $update_customer = "UPDATE `tbl_users` SET`firstname`='$fname',`lastname`='$lname',`email`='$email',
            `password`='$password',`username`='$username',`userimg`='$customerprofile_name' WHERE `id` = '$id'";

            $result = mysqli_query($connect,$update_customer);
                if($result){
                    ?>
                        <script>
                            alert("Customer Updated");
                            window.location.assign("../managecustomerdetail.php");
                        </script>
                    <?php
                }
    }

}

?>