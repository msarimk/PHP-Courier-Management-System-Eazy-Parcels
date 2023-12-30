<?php

// Program For Deleting The Couriers

include_once("./DB.php");

$_GET["id"];
$id = $_GET["id"];

$delete_courier = "DELETE FROM `tbl_couriers` WHERE `id` = $id";
$result = mysqli_query($connect, $delete_courier);
if ($result) {
?>
    <script>
        window.location.assign("./allcourierdetail.php");
    </script>
<?php
}
?>