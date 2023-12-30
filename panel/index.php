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

        <!-- Favicon Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="./img/favicons/favicon.ico">
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/custom.css">


    </head>
    <style>
        a {
            text-decoration: none !important;
        }

        h6 {
            color: #ffbb34;
        }
    </style>

<body oncontextmenu="return false;" id="page-top">


        <!-- Page Loader -->
        <div class="loader"></div>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Importing Page Header -->
            <?php
            include_once("./header.php")
            ?>


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-2">
                    <?php if ($_SESSION["usertype"] == "admin") {
                    ?>
                        <h1 class="h3 mb-0 text-gray-800">Status Count</h1>
                    <?php
                    } elseif ($_SESSION["usertype"] == "agent") {
                    ?>
                        <h1 class="h3 mb-0 text-gray-800">Status Of Branch</h1>
                    <?php
                    }
                    ?>


                    <!-- <a style="background-color: #fe7d43;color:#fff" href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                                class="fas fa-download fa-sm "></i> Generate Report</a> -->
                </div>
                <hr>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <?php
                    if ($_SESSION["usertype"] == "admin") {

                        $status_count = "SELECT COUNT(`id`), SUM(`inprogress`), SUM(`delivered`) FROM `tbl_couriers`";
                        $count_result = mysqli_query($connect, $status_count);
                        if (mysqli_num_rows($count_result)) {
                            $count_data = mysqli_fetch_array($count_result);
                            $shipment_count = $count_data["COUNT(`id`)"];
                            $inprogress_count = $count_data["SUM(`inprogress`)"];
                            $delivery_count = $count_data["SUM(`delivered`)"];
                        }

                        $p_count = "SELECT COUNT(`inprogress`) FROM `tbl_couriers`";
                        $p_result = mysqli_query($connect, $p_count);
                        if (mysqli_num_rows($p_result)) {
                            $p_data = mysqli_fetch_array($p_result);
                            $p_total = $p_data["COUNT(`inprogress`)"];

                            if ($p_total == 0) {
                                $percentage  = 0;
                            } else {
                                $percentage = $delivery_count / $p_total * 100;
                            }
                        }




                    ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div style="border-left: 4px solid #fd7d43;" class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div style="color: #fd7d43;" class="text-xs font-weight-bold  text-uppercase mb-1">
                                                Total Shipments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                                                    if ($shipment_count) {
                                                            echo $shipment_count;
                                                        }
                                                        else {
                                                            echo "0";
                                                        } 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div style="border-left: 4px solid #ffd078;" class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div style="color: #ffd078;" class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                In Progress Deliveries</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if ($inprogress_count) {
                                                            echo $inprogress_count;
                                                    }
                                                    else {
                                                        echo "0";
                                                    } 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-spinner fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div style="border-left: 4px solid #efca9f;" class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div style="color: #efca9f" class="text-xs font-weight-bold  text-uppercase mb-1">Delivered
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php
                                                            if ($delivery_count) {
                                                                echo $delivery_count;
                                                            }
                                                            else {
                                                                echo "0";
                                                            } 
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar" role="progressbar" style="background-color: #efca9f !important ;width: <?php echo $percentage ?>%" aria-valuenow="<?php if ($delivery_count) {
                                                                                                                                                                                                        echo $delivery_count;
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        echo "0";
                                                                                                                                                                                                    } ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->

                </div>
            <?php

                    } 
                    elseif ($_SESSION["usertype"] == "agent") {


                        $check_branch = $_SESSION["branches"];
                        $status_count = "SELECT COUNT(`id`), SUM(`inprogress`), SUM(`delivered`) FROM `tbl_couriers` WHERE `branches` = '$check_branch' ";
                        $count_result = mysqli_query($connect, $status_count);
                        if (mysqli_num_rows($count_result) >= 0) {
                            $count_data = mysqli_fetch_array($count_result);
                            $shipment_count = $count_data["COUNT(`id`)"];
                            $inprogress_count = $count_data["SUM(`inprogress`)"];
                            $delivery_count = $count_data["SUM(`delivered`)"];
                        }


                        $p_count = "SELECT COUNT(`inprogress`) FROM `tbl_couriers` WHERE `branches` = '$check_branch'";
                        $p_result = mysqli_query($connect, $p_count);
                        if (mysqli_num_rows($p_result)) {
                            $p_data = mysqli_fetch_array($p_result);
                            $p_total = $p_data["COUNT(`inprogress`)"];

                            if ($p_total == 0) {
                                $percentage  = 0;
                            } else {
                                $percentage = $delivery_count / $p_total * 100;
                            }
                        }

            ?>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div style="border-left: 4px solid #fd7d43;" class="card  shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div style="color: #fd7d43;" class="text-xs font-weight-bold  text-uppercase mb-1">
                                        Total Shipments</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                            if ($shipment_count) {
                                                echo $shipment_count;
                                            }
                                            else {
                                                echo "0";
                                            } 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-truck fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div style="border-left: 4px solid #ffd078;" class="card  shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div style="color: #ffd078;" class="text-xs font-weight-bold text-uppercase mb-1">
                                        In Progress Deliveries</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                            if ($inprogress_count) {
                                                echo $inprogress_count;
                                            }
                                            else {
                                                echo "0";
                                            } 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-spinner fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div style="border-left: 4px solid #efca9f;" class="card  shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div style="color: #efca9f" class="text-xs font-weight-bold  text-uppercase mb-1">Delivered
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                <?php   
                                                    if ($delivery_count) {
                                                        echo $delivery_count;
                                                    } 
                                                    else {
                                                        echo "0";
                                                    } 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar" role="progressbar" style="background-color: #efca9f !important ;width: <?php echo $percentage ?>%" 
                                                    aria-valuenow="<?php if ($delivery_count) {echo $delivery_count;} else {echo "0";} ?>" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->

            </div>
        <?php

                    }

        ?>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 style="color: #fd7d43;" class="m-0 font-weight-bold ">Earnings Overview</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 style="color: #fd7d43;" class="m-0 font-weight-bold ">Status Graph</h6>
                    </div>
                    <!-- Card Body -->

                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i style="color:#fd7d43;" class="fas fa-circle"></i> Shipment
                            </span>
                            <span class="mr-2">
                                <i style="color:#ffd078 !important;" class="fas fa-circle text-warning"></i> In Progress
                            </span>
                            <span class="mr-2">
                                <i style="color: #efca9f;" class="fas fa-circle "></i> Delivered
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>


    <?php

    // Importing Dynamic Status Charts
    include_once("./js/demo/chart-pie-demo.php");

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