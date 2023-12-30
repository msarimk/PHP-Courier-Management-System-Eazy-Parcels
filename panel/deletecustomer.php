<?php

// Program For Deleting The Customers

include_once("./DB.php");
$id = $_GET["id"];
if($_GET["id"]){
   
   $select = "SELECT * FROM `tbl_users` WHERE `id` = '$id' ";
   $result = mysqli_query($connect,$select);
      if(mysqli_num_rows($result)){
         while($data = mysqli_fetch_array($result)){

            unlink("./user-profile/". $data["userimg"]);

         }
         $fetch = "DELETE FROM `tbl_users` WHERE `id` = '$id' ";
         mysqli_query($connect,$fetch);   
      }
   header("Location: ./managecustomerdetail.php");
}
