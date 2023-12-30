<?php
include_once("./session_start.php");
include("../panel/DB.php");
if ($_SESSION["usertype"] == "user") {
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
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body oncontextmenu="return false;">



    <!-- Page Loader -->
    <div class="loader"></div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <div style="position: relative;">
        <div class="w-100" style="position:absolute;height:100%;z-index:800" id="particles-js"></div>

        <!-- Importing Page Header -->
        <?php
        include_once("./header.php");
        ?>

        <section class="py-xxl-10 pb-0" id="home">
          <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;width:100%;"></div>
          <!--/.bg-holder-->
          <div class="container">

            <div class="row align-items-center">
              <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-7 order-0 order-md-1 text-end">
                <img class="pt-7 pt-md-0 w-100" src="assets/img/illustrations/hero.png" alt="hero-header" />
              </div>
              <div style="z-index: 999;" class="col-lg-6 col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
                <h1 class="fw-normal fs-6 fs-xxl-7">A trusted provider of </h1>
                <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">courier services.</h1>
                <p class="fs-1 mb-5">We deliver your products safely to <br />your home in a reasonable time. </p>
                <a class="btn btn-primary me-2" href="#track" role="button">Tracking<i class="fas fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>

        </section>

      </div>



      <script src="../particles.js-master/particles.js"></script>
      <script src="../particles.js-master/demo/js/app.js"></script>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-4" id="services" container-xl="container-xl">

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
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/services-1.svg" alt="..." />
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
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/services-2.svg" alt="..." />
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

                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/services-3.svg" alt="..." />
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
              <div class="text-center"><img src="assets/img/icons/awards.png" alt="..." />
                <h1 class="text-primary mt-4">26+</h1>
                <h5 class="text-800">Awards won</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/states.png" alt="..." />
                <h1 class="text-primary mt-4">65+</h1>
                <h5 class="text-800">States covered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/clients.png" alt="..." />
                <h1 class="text-primary mt-4">689K+</h1>
                <h5 class="text-800">Happy clients</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/goods.png" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Goods delivered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/business.png" alt="..." />
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



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="contactus" class="py-5">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/quote.png);background-position:top;background-size:auto;margin-left:-270px;margin-top:-45px;">
        </div>
        <div class="container">
          <div class=" text-center mb-5">
            <h5 class="text-danger">CONTACT</h5>
            <h2>Contact Us Anytime</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4">
              <div style="width: 100%;height:auto" class="container-fluid p-0">
                <img style="object-fit: cover ;" class="w-100" src="assets/img/illustrations/callback.png" alt="..." />
              </div>

              <h5 class="text-danger">REQUEST A CALLBACK</h5>
              <h2>We will contact in the shortest time.</h2>
              <p class="text-muted">Monday to Friday, 9am-5pm.</p>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">


              <form class="row" action="./assets/contact.php" method="post">
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputName">Name</label>
                  <input name="name" class="form-control form-quriar-control" id="inputName" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputEmail">Another label</label>
                  <input name="email" class="form-control form-quriar-control" id="inputEmail" type="email" placeholder="Email" />
                </div>
                <div class="mb-5">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea name="message" class="form-control form-quriar-control is-invalid border-400" id="validationTextarea" placeholder="Message" style="height: 150px" required="required"></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary" name="submit" type="submit">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
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
      <section id="findUs" class="pt-3 pb-7">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mb-6 text-center">
              <h5 class="text-danger">FIND US</h5>
              <h2>Access Us Easily</h2>
            </div>
            <div class="col-12">
              <div class="card card-span rounded-2 mb-3">
                <div class="row">
                  <!-- Embedded Google Map -->
                  <div class="col-md-6 col-lg-7 d-flex">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d437.96920043512756!2d67.07318440652607!3d24.833622171545024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1671810215047!5m2!1sen!2s" class="w-100" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="col-md-6 col-lg-5 d-flex flex-center">
                    <div class="card-body">
                      <h5 class="pt-4">Contact with us</h5>

                      <!-- Program For Fetching Company Details -->
                      <?php

                      $find_us = "SELECT * FROM `tbl_company`";
                      $query = mysqli_query($connect, $find_us);

                      $find_us_data = mysqli_fetch_array($query);

                      ?>

                      <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span><?php echo $find_us_data["address"] ?></span></p>
                      <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Monday - Friday: <?php echo $find_us_data["mf-timing"] ?><br /><span class="ps-4">Sunday: <?php echo $find_us_data["s-timing"] ?> </span></span></p>
                      <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="mailto:<?php echo $find_us_data["email"] ?>"> <?php echo $find_us_data["email"] ?></a></p>
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
                <button class="btn btn-primary px-5" type="submit"><i class="fas fa-phone-alt me-2"></i><a class="text-light" href="tel:<?php echo $find_us_data["phone"] ?>"><?php echo $find_us_data["btntext"] ?> <?php echo $find_us_data["phone"] ?></a></button>
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
                    <input id="semail" required class="form-control input-box form-quriar-control text-light" type="email" placeholder="Enter your mail" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-danger" id="subscribe" type="submit">Subscribe</button>
                </div>
              </form>

              <!-- AJAX Code For Subscriptions -->

              <script>
                $('#subscribe').click(function() {
                  var semail = $('#semail').val();

                  if (semail != "") {

                    $.ajax({

                      url: "subscription.php",
                      method: "POST",
                      data: {
                        subscribe: semail
                      },

                      success: function(data) {

                        alert(semail + " has been subscribed")

                      }

                    });
                  }
                });
              </script>


            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    <?php
    // Importing Page Footer
    include_once("./footer.php");
  } else {
    ?>

      <script>
        window.location.assign("./index.php");
      </script>

    <?php
  }
    ?>