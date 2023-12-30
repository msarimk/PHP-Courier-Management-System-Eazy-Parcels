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
                <h1 class="h3 mb-2 text-gray-800">Update Agent</h1>
                <hr>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Update Agent Details</h6>
                    </div>
                    <div class="card-body">


                        <?php

                        $_GET["id"];
                        $id = $_GET["id"];
                        $fetch_agent = "SELECT * FROM `tbl_users` WHERE `id` = $id";
                        $result = mysqli_query($connect, $fetch_agent);
                        if (mysqli_num_rows($result)) {
                            if ($agent_data = mysqli_fetch_array($result)) {
                            }
                        }
                        ?>
                        <form class="row g-3" method="post" action="./assets/updateagent.php" enctype="multipart/form-data">
                            <input style="display: none;" type="text" name="id" value="<?php echo $agent_data["id"] ?>">
                            <div class="col-md-6">
                                <label class="form-label mt-3">First Name</label>
                                <input type="text" name="fname" value="<?php echo $agent_data["firstname"] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Last Name</label>
                                <input type="text" name="lname" value="<?php echo $agent_data["lastname"] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Email</label>
                                <input type="email" name="email" value="<?php echo $agent_data["email"] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label mt-3">Password</label>
                                <input type="password" name="password" value="<?php echo $agent_data["password"] ?>" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label mt-3">User Name</label>
                                <input type="text" name="username" value="<?php echo $agent_data["username"] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">User Type</label>
                                <input type="text" name="usertype" value="<?php echo $agent_data["usertype"] ?>" readonly class="form-control" value="agent">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label mt-3">Agent's Profile</label>
                                <input type="file" name="agentprofile" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="mt-3">
                                    <span>Adopted Branch : <strong style="color: #fe7d43;"><?php echo $agent_data["branches"] ?></strong></span>
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

                            <div class="col-12 mt-3">
                                <button style="background-color: #fe7d43;color:#fff" type="submit" name="submit" class="btn ">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


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