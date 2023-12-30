<?php

// Program For Deleting The Branches

include_once("./DB.php");

$_GET["id"];
$id = $_GET["id"];

$delete_courier = "DELETE FROM `tbl_branches` WHERE `id` = $id";
$result = mysqli_query($connect, $delete_courier);
if ($result) {
?>
    <script>
        window.location.assign("./addorremovebranch.php");
    </script>
<?php
}
?>