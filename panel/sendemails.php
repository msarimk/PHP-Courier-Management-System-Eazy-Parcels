<?php
include_once("./session_start.php");
if ($_SESSION["usertype"] == "admin" || $_SESSION["usertype"] == "agent") {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Eazy Parcels | <?php if ($_SESSION["usertype"] == "admin") {
                                    echo "Administrator";
                                } elseif ($_SESSION["usertype"] == "agent") {
                                    echo $_SESSION["branches"] . " Agent";
                                } ?></title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <!-- Favicon Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="./img/favicons/favicon.ico">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/custom.css">

    </head>
    <style>
        a {
            text-decoration: none !important;
        }
    </style>

<body oncontextmenu="return false;" id="page-top">

    <!-- Importing Lock Inspect Element Code -->
    <?php
    include_once("../lockinspect.php");
    ?>

        <!-- Page Loader -->
        <div class="loader"></div>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Importing Page Header -->
            <?php
            include_once("./header.php");
            ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Send Emails</h1>

                <hr>



                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Add Details</h6>
                    </div>
                    <div style="padding-bottom: 70px;padding-top:70px" class="card-body ">

                        <form action="./assets/sendemails.php" method="post">
                            <div class=" d-flex justify-content-center">
                                <div class="row g-3 justify-content-center">

                                    <div class="mt-3 col-md-8">
                                        <label class="form-label">Recipient Email</label>
                                        <input required type="text" name="remail" class="form-control">
                                    </div>

                                    <div class="mt-3 col-md-8">

                                        <div class="form-outline ">
                                            <label class="form-label" for="textAreaExample">Message</label>
                                            <textarea class="form-control" name="rmessage" id="textAreaExample1" rows="4"></textarea>
                                        </div>

                                        <div class="col-12 mt-3 p-0">
                                            <button style="background-color: #fe7d43;color:#fff" type="submit" name="sendmail" class="btn">Send Mail</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
        <?php

        // Importing Page Footer
        include_once("./footer.php");
    } else {
        ?>
            <script>
                window.location.assign("../index.php");
            </script>
        <?php
    }
        ?>