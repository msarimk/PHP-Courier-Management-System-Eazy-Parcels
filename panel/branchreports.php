<?php
include_once("./session_start.php");
if ($_SESSION["usertype"] == "agent") {
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
                                } ?>
        </title>


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
    </style>

<body oncontextmenu="return false;" id="page-top">


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
                <div class="d-sm-flex align-items-center justify-content-between mb-2">
                    <h1 class="h3 mb-2 text-gray-800">Branch's All Details</h1>
                    <a href="#" onclick="export_data()" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                    </a>
                </div>

                <hr>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Branch Reports</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>

                                        <th class="text-center">Order Date</th>
                                        <th class="text-center">Company Name</th>
                                        <th class="text-center">Branches</th>
                                        <th class="text-center">Sender Name</th>
                                        <th class="text-center">Sender Address</th>
                                        <th class="text-center">Sender Phone</th>
                                        <th class="text-center">Sender Email</th>
                                        <th class="text-center">Product</th>
                                        <th class="text-center">Reciever Name</th>
                                        <th class="text-center">Reciever Address</th>
                                        <th class="text-center">Reciever Phone </th>
                                        <th class="text-center">Reciever Email</th>
                                        <th class="text-center">Delivery Status</th>
                                        <th class="text-center">Delivery Date</th>
                                        <th class="text-center">Tracking Number</th>

                                    </tr>
                                </thead>



                                <tbody>
                                    <?php

                                    if ($_SESSION["usertype"] == "agent") {
                                        $check_branch = $_SESSION["branches"];
                                        $courier_details = "SELECT * FROM `tbl_couriers` WHERE `branches` = '$check_branch' ";
                                        $result = mysqli_query($connect, $courier_details);
                                        if (mysqli_num_rows($result)) {
                                            while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $data["bookingdate"] ?></td>
                                                    <td class="text-center"><?php echo $data["couriercompany"] ?></td>
                                                    <td class="text-center"><?php echo $data["branches"] ?></td>
                                                    <td class="text-center"><?php echo $data["sendername"] ?></td>
                                                    <td class="text-center"><?php echo $data["senderaddress"] ?></td>
                                                    <td class="text-center"><?php echo $data["senderphone"] ?></td>
                                                    <td class="text-center"><?php echo $data["senderemail"] ?></td>
                                                    <td class="text-center"><?php echo $data["product"] ?></td>
                                                    <td class="text-center"><?php echo $data["recievername"] ?></td>
                                                    <td class="text-center"><?php echo $data["recieveraddress"] ?></td>
                                                    <td class="text-center"><?php echo $data["recieverphone"] ?></td>
                                                    <td class="text-center"><?php echo $data["recieveremail"] ?></td>
                                                    <?php
                                                    if ($data["inprogress"] == 1) {
                                                    ?>

                                                        <td class="text-center"><?php echo "In Progress" ?></td>

                                                    <?php
                                                    } elseif ($data["delivered"] == 1) {
                                                    ?>

                                                        <td class="text-center"><?php echo "Delivered" ?></td>

                                                    <?php
                                                    }
                                                    ?>
                                                    <td class="text-center"><?php echo $data["deliverydate"] ?></td>
                                                    <td class="text-center"><?php echo $data["trackingno"] ?></td>


                                                </tr>
                                    <?php

                                            }
                                        }
                                    }
                                    ?>


                                </tbody>

                                <script src="./js/xlsx.full.min.js"></script>
                                <script>
                                    function export_data() {
                                        let data = document.getElementById("dataTable");
                                        var fp = XLSX.utils.table_to_book(data, {
                                            sheet: 'Eazy Parcels'
                                        });
                                        XLSX.write(fp, {
                                            bookType: 'xlsx',
                                            type: 'base64'
                                        });
                                        XLSX.writeFile(fp, '<?php echo $check_branch; ?> Branch Reports.xlsx')
                                    }
                                </script>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

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