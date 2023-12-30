
<!-- Page Header -->

<script src="../src/js/jquery-3.5.1.min.js"></script>
<nav style="padding-top: 12px;padding-bottom:12px" class="navbar navbar-expand-lg navbar-light fixed-top d-block" data-navbar-on-scroll="data-navbar-on-scroll">
  <div class="container"><a class="navbar-brand" href="./user.php"><img class="logo" width="140px" src="../panel/panel-logo/courier.png"  alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="./user.php">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#services">Our Services</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Find Us</a></li>
            </ul>

            <a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="#contactus">Contact Us</a>

            <style>
              @media (max-width:991.5px) {
                .user-sec{
                  padding-left: 0px !important;
                }
  
              }
              @media (max-width:350px) {
                .logo{
                  width: 100px !important;
                }
  
              }
            </style>

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 ">
                <li class="nav-item dropdown p-3 user-sec">
                    <a style="color: #ffb728;" class="dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i style="color: #ffb728;" class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu bg-white dropdown-menu-end  " aria-labelledby="navbarDropdown">
                          <li>
                            <a class="dropdown-item d-flex align-items-center">
                              <img width="40px" class="pe-2" src="../panel/user-profile/<?php echo $_SESSION["userimg"] ?>" alt="">
                              <p class="m-0 ps-2"><?php echo $_SESSION["fname"] ?> <?php echo $_SESSION["lname"] ?></p>
                            </a>
                          </li>
                      
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="./assets/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>


      </div>
  </div>
</nav>