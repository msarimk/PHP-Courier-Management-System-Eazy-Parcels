<?php

// Program For Deleting The Customer Messages

include_once("./DB.php");

$_GET["id"];
$id = $_GET["id"];

$delete_subs = "DELETE FROM `tbl_contact` WHERE `id` = $id";
$result = mysqli_query($connect, $delete_subs);
if ($result) {
?>
    <script>
        window.location.assign("./customermessages.php");
    </script>
<?php
}
?>