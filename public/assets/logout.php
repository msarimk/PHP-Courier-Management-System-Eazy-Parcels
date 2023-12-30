<?php

// Program For Logout Sessions

session_start();
session_unset();
session_destroy();
header("Location: ../../index.php");


?>