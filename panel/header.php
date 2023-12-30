<!-- Page Header -->
<?php
include_once("./DB.php");
?>
<script src=".././src/js/jquery-3.5.1.min.js"></script>

<!-- Sidebar -->
<ul style="background-color: #fe7d43;" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <img width="50px" src="./panel-logo/eazy-parcels.png" alt="">
        </div>
        <div class="sidebar-brand-text mx-2">Eazy Parcels</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="./index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-truck-loading"></i>
            <span>Shipments</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="./newcourier.php">New Courier</a>
                <a class="collapse-item" href="./allcourierdetail.php">All Courier Details</a>
            </div>
        </div>
    </li>

    <?php
    if ($_SESSION["usertype"] == "admin") {
    ?>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-person-booth"></i>

                <span>Agent</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="./createagent.php">Create Agent</a>
                    <a class="collapse-item" href="./manageagent.php">Manage Agent</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-users"></i>

                <span>Manage Customers</span>
            </a>
            <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="./managecustomerdetail.php">Customer Details</a>
                    <a class="collapse-item" href="./customermessages.php">Customer Messages</a>
                    <a class="collapse-item" href="./customersubscription.php">Customer Subscriptions</a>
                </div>
            </div>
        </li>
    <?php
    }
    ?>

    <?php
    if ($_SESSION["usertype"] == "agent") {
    ?>
        <li class="nav-item">
            <a class="nav-link" href="./branchreports.php">
                <i class="fas fa-code-branch"></i>
                <span>Branch Reports</span></a>
        </li>
    <?php
    }
    ?>

    <?php
    if ($_SESSION["usertype"] == "admin") {
    ?>

        <!-- Nav Item - Shipment Reports -->
        <li class="nav-item">
            <a class="nav-link" href="./shipmentreports.php">
                <i class="fab fa-stack-overflow"></i>
                <span>Shipment Reports</span></a>
        </li>

        <!-- Nav Item - Add or Remove Branches -->
        <li class="nav-item">
            <a class="nav-link" href="./addorremovebranch.php">
                <i class="fas fa-edit"></i>
                <span>Add Or Manage Branches</span></a>
        </li>
    <?php
    }
    ?>

    <!-- Nav Item - Send Emails -->
    <li class="nav-item">
        <a class="nav-link" href="./sendemails.php">
            <i class="fas fa-paper-plane"></i>
            <span>Send Emails</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i style="color: #fe7d43 !important;" class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button style="background-color: #fff3db;" class="btn" type="button">
                            <i style="color: #ffbb34;" class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>



                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["fname"] ?> <?php echo $_SESSION["lname"] ?></span>
                        <img class="img-profile rounded-circle" src="./user-profile/<?php echo $_SESSION["userimg"] ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="../public/assets/logout.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->