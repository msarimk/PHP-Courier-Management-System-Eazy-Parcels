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


        <!-- Page Loader -->
        <div class="loader"></div>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php

            // Importing Page Header
            include_once("./header.php");

            // Setting Up Default Date & Time Zone
            date_default_timezone_set('Asia/Karachi');
            $current_date = date("y-m-d");

            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Add New Courier</h1>

                <hr>


                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Add Courier Details</h6>
                    </div>
                    <div class="card-body">
                        <?php echo $_SESSION["allmail"]; ?>

                        <div class="form-group col-xxl-8 col-xl-8 col-lg-8 col-md-8  mx-auto ">
                            <form action="./assets/newcourier.php" method="post">

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputEmail1">Order Date</label>
                                        <input name="orderdate" readonly value="20<?php echo $current_date ?>" type="text" class="form-control text-center " aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label class="mt-3">Courier Company</label>
                                        <input name="company" required type="text" class="form-control text-center " aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row g-3 ">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Sender Name</label>
                                        <input name="sendername" required type="text" class="form-control ">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Sender Phone</label>
                                        <input name="senderphone" required type="text" class="form-control">
                                    </div>
                                </div>


                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputPassword1" class="mt-3">Sender Address</label>
                                        <input name="senderaddress" required type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3">



                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Product</label>
                                        <input name="product" type="text" required class="form-control">
                                    </div>

                                    <?php
                                    if ($_SESSION["usertype"] == "admin") {
                                    ?>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                            <label for="exampleInputPassword1" class="mt-3">Select Branch</label>
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
                                    <?php
                                    } elseif ($_SESSION["usertype"] == "agent") {
                                    ?>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                            <label for="exampleInputPassword1" class="mt-3">Branch</label>
                                            <input name="branches" readonly value="<?php echo $_SESSION["branches"] ?>" type="text" required class="form-control">
                                        </div>
                                    <?php
                                    }
                                    ?>


                                </div>



                                <div class="row g-3">


                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever Name</label>
                                        <input name="recievername" type="text" required class="form-control">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever Phone</label>
                                        <input name="recieverphone" type="text" required class="form-control">
                                    </div>

                                </div>


                                <div class="row g-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Sender's Email</label>
                                        <input name="senderemail" type="text" required class="form-control">
                                    </div>

                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever's Email</label>
                                        <input name="recieveremail" type="text" required class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputPassword1" class="mt-3">Reciever Address</label>
                                        <input name="recieveraddress" type="text" required class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleInputPassword1" class="mt-3">Delivery Date</label>
                                        <input name="deliverydate" type="date" required class="form-control text-center">
                                    </div>
                                </div>

                                <button style="background-color: #fe7d43;color:#fff" type="submit" name="submit" class="btn mt-5 mb-3">Add</button>

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