<?php

// Program For Adding Branches
include_once("./DB.php");

if(isset($_POST["branch"])){

    $branch = $_POST["branch"];
    $add_branch = "INSERT INTO `tbl_branches`(`id`, `branches`) VALUES (NULL,'$branch')";
    mysqli_query($connect,$add_branch);
    
}
