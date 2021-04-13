<?php

//Initialization
$FirstName['First_name'] = "";
$LastName['Last_name'] = "";


if (isset($_POST['First_name'])) $UserName['First_name'] = htmlspecialchars($_POST['First_name']);
if (isset($_POST['Last_name'])) $UserPhone['Last_name'] = htmlspecialchars($_POST['Last_name']);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/booking.css">
    <title>Book an appointment</title>
</head>

<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light nav px-3">
        <img src="assets/img/logo/icons8-caduceus-medical-100.png" alt="" width="40">
        <a class="navbar-brand" href="index.php">hPharma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- jumbotron -->


    <div class="container-fluid px-0">
        <div class="jumbotron jumbotron-fluid">
            <div class="bg-img"></div>
            <div class="container">
                <h1 class="display-2 text-center">Book an appointment</h1>
                <p class="lead text-center">Schedule an appointment with any of our health professionals for medical advice.</p>
            </div>
        </div>
    </div>

    <!-- booking form -->
    <div class="container card form-container">
        <p class="display-4 text-center">Schedule now</p>
        <hr>
        <form action="index.php" method="POST" target="_self">
            <div class="fields">
                <div class="field">
                    <label for="">First Name</label>
                    <input type="text" placeholder="First Name" name="First_name" id="First_name" onblur="VerifyFname();"><br>
                    <span style="color: red;"><?php if (isset($errors['Error_FirstName'])) echo $errors['Error_FirstName']; ?></span>
                </div>

                <div class="field">
                    <label for="">Last Name</label>
                    <input type="text" placeholder="Last Name" name="Last_name" id="Last_name" onblur="VerifyLname();"><br>
                </div>

                <div class="field">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email" name="Email" id="Email" onblur="VerifyEmail();"><br>
                </div>

                <div class="field">
                    <label for="">Preferred Date</label>
                    <input type="date" name="date_picked" id="date_picked"><br>
                </div>

                <div class="field">
                    <label for="">Appointment for</label>
                    <select type="text" name="purpose" id="purpose">
                        <option value="">Service</option>
                    </select>
                </div>

                <div class="field">
                    <label>Preferred Time</label>
                    <select name="bookingTime">
                        <option>-- Choose time --</option>
                        <option value="8:00am - 9:00am">8:00am - 9:00am</option>
                        <option value="9:00am - 10:00am">9:00am - 10:00am</option>
                        <option value="10:00am - 11:00am">10:00am - 11:00am</option>
                        <option value="11:00am - 12:00pm">11:00am - 12:00pm</option>
                        <option value="12:00pm - 1:00pm">12:00pm - 1:00pm</option>
                    </select>
                </div>

                <div class="field">
                    <input type="submit" value="Book Appointment" name="save">
                </div>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white footer">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
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
                                <label class="form-label" for="form5Example2">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-dark mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">hPharma</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/book_validate.js"></script>
</body>

</html>