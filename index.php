<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/users.css" />
    <title>hPharma - Welcome</title>
  </head>
  <body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light nav px-3">
      <img src="assets/img/logo/icons8-caduceus-medical-100.png" alt="" width="40"/>
      <a class="navbar-brand" href="#">hPharma</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <!-- hero -->
    <div class="container-fluid px-0 hero">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/carousel/hush-naidoo-pA0uoltkwao-unsplash.jpg" alt="First slide"/>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel/kendal-L4iKccAChOc-unsplash.jpg" alt="Second slide"/>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel/lucas-vasques-9vnACvX2748-unsplash.jpg" alt="Third slide"/>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel/sara-bakhshi-MfnX4XtGnvU-unsplash.jpg" alt="Fourth slide"/>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel/sharon-mccutcheon-nj9tmN-7YMA-unsplash.jpg" alt="Fifth slide"/>
          </div>
        </div>
      </div>
    </div>

    <!-- body content -->
    <main class="pb-5">
      <div class="container">

        <!-- services -->
        <div class="request">
          <p class="text-center service-msg">
            What services would you like to access today?
          </p>
          <hr />
        </div>

        <!-- menu -->
        <div class="cards">
          <a href="book.php" class="card text-center">
            <img src="assets/img/icons/icons8-schedule-100.png" alt="" />
            <p class="title">BOOKING</p>
            <p>
              Schedule an appointment with a doctor.
            </p>
          </a>

          <a href="profile.php" class="card text-center">
            <img src="assets/img/icons/icons8-doctor-male-100.png" alt="" />
            <p class="title">DOCTORS PROFILE</p>
            <p>
              Find out more about our doctors.
            </p>
          </a>

          <a href="treatment.php" class="card text-center">
            <img
              src="assets/img/icons/icons8-wound-treatment-100.png"
              alt=""
            />
            <p class="title">TREATMENTS</p>
            <p>
              Treatments on the go tailored for you.
            </p>
          </a>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white footer">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>

          <!-- Github -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" id="form5Example2" class="form-control" />
                  <label class="form-label" for="form5Example2"
                    >Email address</label
                  >
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-light mb-4">
                  Subscribe
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Text -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        ?? 2020 Copyright:
        <a class="text-white" href="#">hPharma</a>
      </div>
      <!-- Copyright -->
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  </body>
</html>
