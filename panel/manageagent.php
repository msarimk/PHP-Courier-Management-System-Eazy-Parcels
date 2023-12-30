<?php
include_once("./session_start.php");
if ($_SESSION["usertype"] == "admin") {
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

            <!-- Importing Page Header -->
            <?php
            include_once("./header.php");
            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">All Agents</h1>

                <hr>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Agents</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">First Name</th>
                                        <th class="text-center">Last Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">User Name</th>
                                        <th class="text-center">Agent's Profile</th>
                                        <th class="text-center">Agent's Branch</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>



                                <tbody>
                                    <?php
                                    $courier_details = "SELECT * FROM `tbl_users` WHERE `usertype` = 'agent'";
                                    $result = mysqli_query($connect, $courier_details);
                                    if (mysqli_num_rows($result)) {
                                        while ($data = mysqli_fetch_array($result)) {

                                    ?>
                                            <tr>
                                                <td class="text-center"><?php echo $data["firstname"] ?></td>
                                                <td class="text-center"><?php echo $data["lastname"] ?></td>
                                                <td class="text-center"><?php echo $data["email"] ?></td>
                                                <td class="text-center"><?php echo $data["username"] ?></td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img width="50px" src="./user-profile/<?php echo $data["userimg"] ?>">
                                                    </div>
                                                </td>
                                                <td class="text-center"><?php echo $data["branches"] ?></td>

                                                <td>
                                                    <div style="text-align: center;">
                                                        <a class="text-white" href="./updateagent.php?id=<?php echo $data["id"] ?>"><button class="btn btn-primary mt-2">Update</button></a>
                                                        <a class="text-white" href="./deleteagent.php?id=<?php echo $data["id"] ?>"><button class="btn btn-danger mt-2">Delete</button></a>
                                                    </div>
                                                </td>

                                            </tr>

                                    <?php

                                        }
                                    }
                                    ?>
                                </tbody>


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