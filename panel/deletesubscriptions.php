<?php

// Program For Deleting The Customers Subscriptions

include_once("./DB.php");

$_GET["id"];
$id = $_GET["id"];

$delete_subs = "DELETE FROM `tbl_subscription` WHERE `id` = $id";
$result = mysqli_query($connect, $delete_subs);
if ($result) {
?>
    <script>
        window.location.assign("./customersubscription.php");
    </script>
<?php
}
?>