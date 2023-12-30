<?php

// Program For Login

include_once("../session_start.php");
include_once("../../panel/DB.php");

if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    $login = "SELECT * FROM `tbl_users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($connect,$login);

    if(mysqli_num_rows($result) > 0 ){
        if($row = mysqli_fetch_array($result)){

            if($row["usertype"] == "admin"){
              
                $_SESSION["fname"] = $row["firstname"];
                $_SESSION["lname"] = $row["lastname"];
                $_SESSION["userimg"] = $row["userimg"]; 
                $_SESSION["usertype"] = $row["usertype"];

              ?>
                  <script>
                    window.location.assign("../../panel/index.php");
                  </script>
              <?php
              }
              elseif($row["usertype"] == "agent" ){

                $_SESSION["fname"] = $row["firstname"];
                $_SESSION["lname"] = $row["lastname"]; 
                $_SESSION["userimg"] = $row["userimg"]; 
                $_SESSION["usertype"] = $row["usertype"];
                $_SESSION["branches"] = $row["branches"];
                  
              ?>

                  <script>
                    window.location.assign("../../panel/index.php");
                  </script>

                  <?php
              }
              elseif($row["usertype"] == "user" ){

                $_SESSION["fname"] = $row["firstname"];
                $_SESSION["lname"] = $row["lastname"]; 
                $_SESSION["userimg"] = $row["userimg"]; 
                $_SESSION["usertype"] = $row["usertype"];
                  
                  ?>

                  <script>
                    window.location.assign("../user.php");
                  </script>

                  <?php
              }
        }
    }
    else{

        $_SESSION["login_failed"] = "Login Failed";
        $_SESSION["warning"] = "Your email or password is incorrect !";
        ?>
            <script>
                window.location.assign("../../index.php");
            </script>
        <?php
    }


}

?>