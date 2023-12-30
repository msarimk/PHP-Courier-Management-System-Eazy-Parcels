<?php
include_once("./public/session_start.php");
if($_SESSION["fname"] == ""){
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Eazy Parcels | Courier</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="./public/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="./public/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="./public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="./public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="./public/assets/css/theme.css" rel="stylesheet" />
  
  </head>

  <body oncontextmenu="return false;">


    <!-- Page Loader -->
    <div class="loader"></div>

    <!--Main Content-->

    <main class="main" id="top">
      
      <!-- Page Header -->
      <div style="position: relative;">
      <div class="w-100" style="position:absolute;height:100%;z-index:800" id="particles-js"></div>
      <nav style="padding-top: 12px;padding-bottom:12px" class="navbar navbar-expand-lg navbar-light fixed-top d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="./index.php"><img class="logo" width="140px" src="./panel/panel-logo/courier.png"  alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                    <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="./index.php">Home</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="#services">Our Services</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="#findUs">Find Us</a></li>
                  </ul>

                  <a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="#contactus">Contact Us</a>

                  <form class="d-flex my-3 d-block d-lg-none">
                    <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                  </form>
            </div>
        </div>
      </nav>

      <style>

              @media (max-width:350px) {
                .logo{
                  width: 100px !important;
                }
  
              }
            </style>


        <section class="py-xxl-10 pb-0" id="home">
            <div class="bg-holder bg-size" style="background-image:url(./public/assets/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;width:100%;"></div>
                <!--/.bg-holder-->
                <div  class="container">

                  <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-7 order-0 order-md-1 text-end">
                      <img class="pt-7 pt-md-0 w-100" src="./public/assets/img/illustrations/hero.png" alt="hero-header" />
                    </div>
                    <div style="z-index: 999;"  class="col-lg-6 col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
                      <h1 class="fw-normal fs-6 fs-xxl-7">A trusted provider of </h1>
                      <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">courier services.</h1>
                      <p class="fs-1 mb-5">We deliver your products safely to <br />your home in a reasonable time. </p>
                          <a  class="btn btn-primary me-2" href="#track" role="button">Tracking<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                  </div>
                </div>

          </section>
        </div>
        <script src="./particles.js-master/particles.js" ></script>
        <script src="./particles.js-master/demo/js/app.js"></script>

        <!-- Page Header End -->


      <div id="container"  class='mb-5 container'> 

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="background-color: #fffbf3ee" class=" mt-3 mb-3 modal-body">
                        
                      <form method="post" action="./public/assets/login.php"  >
                        <p class="text-center h1 fw-bold mt-2 mb-5 mx-1 mx-md-4 ">Log <span style="color:#f95c19;" >In</span></p>
              

                        <div class="mb-3">
                          <input type="email"  name="email" required placeholder="Email" class="form-control bg-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                          <input type="password" name="password" required placeholder="Password" class="form-control  bg-white" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input  bg-white" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>

              
                        <div class="text-center text-lg-start mt-2 pt-2">
                          <button type="submit" name="submit" class="btn btn-lg text-white"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;background-color: #f95c19;">Login
                          </button>
                          <h6 class="mt-3 text-center text-danger"><?php echo $_SESSION["login_failed"] ?></h6>
                              <p style="font-size: 12px;" class="text-center"><?php echo $_SESSION["warning"] ?></p>
                          <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./public/register.php"
                              class="link-danger">Register</a></p>

                              
                        </div>
              
                      </form>
                        
                    </div>
                </div>
            </div>
        </div>
      </div> 


<script src="./public/assets/js/jquery-3.6.0.min.js"></script>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-7" id="services" container-xl="container-xl">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
              <h5 class="text-danger">SERVICES</h5>
              <h2>Our services for you</h2>
            </div>
          </div>
          <div class="row h-100 justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="./public/assets/img/icons/services-1.svg" alt="..." />
                    <h5 class="my-4">Business Services</h5>
                  </div>
                  <p>Offering home delivery around the city, where your products will be at your doorstep within 48-72 hours.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Corporate goods
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Shipment
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Accesories
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <button class="btn btn-outline-danger" type="submit">Learn more </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="./public/assets/img/icons/services-2.svg" alt="..." />
                    <h5 class="my-4">Statewide Services</h5>
                  </div>
                  <p>Offering home delivery around the city, where your products will be at your doorstep within 48-72 hours.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Unlimited Bandwidth
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Encrypted Connection
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Yes Traffic Logs
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <button class="btn btn-danger hover-top btn-glow border-0" type="submit">Learn more</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="./public/assets/img/icons/services-3.svg" alt="..." />
                    <h5 class="my-4">Personal Services</h5>
                  </div>
                  <p>You can trust us to safely deliver your most sensitive documents to the specific area in a short time.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Unlimited Bandwidth
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Encrypted Connection
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Yes Traffic Logs
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <button class="btn btn-outline-danger" type="submit">Learn more </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-7 pb-0">

        <div class="container">
          <div class="row">
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="./public/assets/img/icons/awards.png" alt="..." />
                <h1 class="text-primary mt-4">26+</h1>
                <h5 class="text-800">Awards won</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="./public/assets/img/icons/states.png" alt="..." />
                <h1 class="text-primary mt-4">65+</h1>
                <h5 class="text-800">States covered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="./public/assets/img/icons/clients.png" alt="..." />
                <h1 class="text-primary mt-4">689K+</h1>
                <h5 class="text-800">Happy clients</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="./public/assets/img/icons/goods.png" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Goods delivered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="./public/assets/img/icons/business.png" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Business hours</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4">
            <div style="width: 100%;height:auto" class="container-fluid p-0">
                <img style="object-fit: cover ;" class="w-100" src="./public/assets/img/illustrations/callback.png" alt="..." />
              </div>
              <h5 class="text-danger">REQUEST A CALLBACK</h5>
              <h2>We will contact in the shortest time.</h2>
              <p class="text-muted">Monday to Friday, 9am-5pm.</p>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
              <form class="row">
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputName">Name</label>
                  <input class="form-control form-quriar-control" id="inputName" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputEmail">Another label</label>
                  <input class="form-control form-quriar-control" id="inputEmail" type="email" placeholder="Email" />
                </div>
                <div class="mb-5">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea class="form-control form-quriar-control is-invalid border-400" id="validationTextarea" placeholder="Message" style="height: 150px" required="required"></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary" type="submit">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- Tracking Section -->
      <section id="track" class="pt-5 pb-5">
        <div class="container">

          <div class="text-center">
            <h5 class="text-danger">TRACKING</h5>
            <h2>Track Parcels Easily</h2>
          </div>

          <div class="d-flex justify-content-center">
            <div class="m-5 track_div" style="background-color: #fff;width: 100%;border-bottom: 5px solid #f95c19; border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">

              <div class="d-flex justify-content-center mt-5 mb-2">
                <p class="py-1 px-5 track_p1" style="background-color: #f95c19;color: #fff;border-radius: 50px;">Track Your Shipment</p>
              </div>

              <div class="container info">
                <p>Enter any combination of tracking Reference number (one per line).</p>
              </div>

              <form>

                <div class="col-lg-5 col-md-8 col-sm-12">
                  <div class="container track_input">
                    <input required name="trackingno" type="text" id="trackingno" class="form-control">
                  </div>
                </div>

                <div id="main1" style="display: none;">
                  <div style="display: none;" class="container d-flex justify-content-start mt-2 mb-3">
                    <button class="py-2 px-3 track_a1 text_dark" style="background-color: #f95c19;color: #fff;cursor:pointer;border:none" type="submit" class="bg-none">
                      Track
                    </button>
                  </div>
                </div>

                <div id="main2">
                  <div id="track_btn" class="container d-flex justify-content-start mt-2 mb-3">
                    <button class="py-2 px-3 track_a1 text_dark" style="background-color: #f95c19;color: #fff;cursor:pointer;border:none" type="submit">
                      Track
                    </button>
                  </div>
                </div>

              </form>

              <!-- AJAX Code For Tracking Form -->
              <script>
                $('#trackingno').keyup(function() {
                  var input = $(this).val();

                  if (input != "") {
                    $('#main1').hide();
                    $('#main2').show();
                    $.ajax({

                      url: "fortracking.php",
                      method: "POST",
                      data: {
                        track: input
                      },

                      success: function(data) {
                        $("#track_btn").html(data);

                      }

                    });
                  } else {
                    $('#main1').show()
                    $('#main2').css('display', 'none');
                  }
                });
              </script>

            </div>
          </div>
        </div>
      </section>
      <!-- Tracking Section End -->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="findUs">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mb-6 text-center">
              <h5 class="text-danger">FIND US</h5>
              <h2>Access us easily</h2>
            </div>
            <div class="col-12">
              <div class="card card-span rounded-2 mb-3">
                <div class="row">
                  <div class="col-md-6 col-lg-7 d-flex"><img class="w-100 fit-cover rounded-md-start rounded-top rounded-md-top-0" src="./public/assets/img/gallery/map.svg" alt="map" /></div>
                  <div class="col-md-6 col-lg-5 d-flex flex-center">
                    <div class="card-body">
                      <h5>Contact with us</h5>
                      <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>2277 Lorem Ave, San Diego, CA 22553</span></p>
                      <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Monday - Friday: 10 am - 10pm<br/><span class="ps-4">Sunday: 11 am - 9pm  </span></span></p>
                      <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="mailto:vctung@outlook.com"> info@quriarbox.com</a></p>
                      <ul class="list-unstyled list-inline mt-5">
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-primary px-5" type="submit"><i class="fas fa-phone-alt me-2"></i><a class="text-light" href="tel:123-456789">Call us to delivery 123-456789</a></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-1000">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-white">Get an update every week</h2>
              <p class="text-300">We ensure that your product is delivered in the safest possible<br />manner, at the correct location, at the right time.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="text-primary mb-3">SUBSCRIBE TO NEWSLETTER </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control input-box form-quriar-control text-light" id="inputEmailCta" type="email" placeholder="Enter your mail" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-danger" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <?php
      if($_SESSION["usertype"] == ""){
        ?>
            <script src="./public/assets/js/loginmodal.js"></script>
        <?php
      }
    ?>

<?php

// Importing Page Footer
include_once("./public/footer.php");

}
else{
  if($_SESSION["usertype"] == "user"){
    ?>
      <script>
        window.location.assign("./public/./user.php");
      </script>
    <?php
  }
  elseif($_SESSION["usertype"] == "agent"){
    ?>
      <script>
        window.location.assign("./panel/index.php");
      </script>
    <?php
  }
  elseif($_SESSION["usertype"] == "admin"){
    ?>
      <script>
        window.location.assign("./panel/index.php");
      </script>
    <?php
  }
}
?>