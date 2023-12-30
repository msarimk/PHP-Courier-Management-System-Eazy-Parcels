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
                                    echo "Admin";
                                } elseif ($_SESSION["usertype"] == "agent") {
                                    echo "Agent";
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
                <h1 class="h3 mb-2 text-gray-800">Update Courier</h1>

                <hr>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Update Courier Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group col-xxl-8 col-xl-8 col-lg-8 col-md-8  mx-auto mt-5">

                            <?php
                            $_GET["id"];
                            $id = $_GET["id"];
                            $fetch_courier = "SELECT * FROM `tbl_couriers` WHERE `id` = $id";
                            $result = mysqli_query($connect, $fetch_courier);
                            if (mysqli_num_rows($result)) {
                                if ($courier_data = mysqli_fetch_array($result)) {
                                }
                            }
                            ?>

                            <form action="./assets/updatecourier.php" method="post">

                                <input type="text" style="display: none;" name="id" value="<?php echo $courier_data["id"] ?>">

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputEmail1">Order Date</label>
                                        <input name="orderdate" required value="<?php echo $courier_data["bookingdate"] ?>" type="text" class="form-control text-center " aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label class="mt-3">Courier Company</label>
                                        <input name="company" value="<?php echo $courier_data["couriercompany"] ?>" required type="text" class="form-control text-center " aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Sender Name</label>
                                        <input name="sendername" value="<?php echo $courier_data["sendername"] ?>" required type="text" class="form-control ">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Sender Phone</label>
                                        <input name="senderphone" value="<?php echo $courier_data["senderphone"] ?>" required type="text" class="form-control">
                                    </div>
                                </div>


                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputPassword1" class="mt-3">Sender Address</label>
                                        <input name="senderaddress" value="<?php echo $courier_data["senderaddress"] ?>" required type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputPassword1" class="mt-3">Product</label>
                                        <input name="product" type="text" value="<?php echo $courier_data["product"] ?>" required class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3">


                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 ">
                                        <label for="exampleInputPassword1" class="mt-3">
                                            <span>Adopted Branch : <strong style="color: #fe7d43;"><?php echo $courier_data["branches"] ?></strong></span>
                                        </label>
                                        <select required class="form-control" name="branches">
                                            <option value=""></option>
                                            <?php
                                            $branch = "SELECT `branches` FROM `tbl_branches`";
                                            $result = mysqli_query($connect, $branch);
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($branches = mysqli_fetch_array($result)) {
                                            ?>
                                                    <option value="<?php echo $branches[0] ?>"><?php echo $branches[0] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>


                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">
                                            <span> Adopted Status : <strong style="color: #fe7d43;">
                                                    <?php
                                                    if ($courier_data["inprogress"] == 1) {
                                                    ?>

                                                        <td><?php echo "In Progress" ?></td>

                                                    <?php
                                                    } elseif ($courier_data["delivered"] == 1) {
                                                    ?>

                                                        <td><?php echo "Delivered" ?></td>

                                                    <?php
                                                    }
                                                    ?>

                                                </strong>
                                            </span>
                                        </label>

                                        <select required class="form-control" name="status">
                                            <option value=""></option>
                                            <option value="inprogress">In Progress</option>
                                            <option value="delivered">Delivered</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever Name</label>
                                        <input name="recievername" type="text" value="<?php echo $courier_data["recievername"] ?>" required class="form-control">
                                    </div>

                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever Phone</label>
                                        <input name="recieverphone" type="text" value="<?php echo $courier_data["recieverphone"] ?>" required class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever Address</label>
                                        <input name="recieveraddress" type="text" value="<?php echo $courier_data["recieveraddress"] ?>" required class="form-control">
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Sender's Email</label>
                                        <input name="senderemail" type="text" value="<?php echo $courier_data["senderemail"] ?>" required class="form-control">
                                    </div>

                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever's Email</label>
                                        <input name="recieveremail" type="text" value="<?php echo $courier_data["recieveremail"] ?>" required class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputPassword1" class="mt-3">Delivery Date</label>
                                        <input name="deliverydate" type="text" value="<?php echo $courier_data["deliverydate"] ?>" required class="form-control text-center">
                                    </div>
                                </div>

                                <input type="text" name="trackingno" style="display: none;" value="<?php echo $courier_data["trackingno"] ?>">

                                <button style="background-color: #fe7d43;color:#fff" type="submit" name="submit" class="btn mt-5 mb-3">Update</button>

                            </form>
                        </div>
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