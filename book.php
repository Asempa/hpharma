<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/booking.css">
<title>Book an appointment</title>
</head>
    <body>

        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light nav px-3">
            <img src="/assets/img/logo/icons8-caduceus-medical-100.png" alt="" width="40">
            <a class="navbar-brand" href="#">hPharma</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">Settings</a>
                </li>
                <li class="nav-item" id="signUp">
                <a class="nav-link" href="">Logout</a>
                </li>
            </ul>
            </div>
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
            <form action="">
                <div class="fields">
                    <div class="field">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name" name="First_name" id="First_name" onblur="VerifyFname();"><br>
                        <span id="First_Error">&nbsp;</span>
                    </div>

                    <div class="field">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name" name="Last_name" id="Last_name" onblur="VerifyLname();"><br>
                        <span id="Last_Error">&nbsp;</span>
                    </div>

                    <div class="field">
                        <label for="">Email</label>
                        <input type="text" placeholder="Email" name="Email" id="Email" ><br>
                        <span id="Email_Error">&nbsp;</span>
                    </div>

                    <div class="field">
                        <label for="">Preferred Date</label>
                        <input type="date" name="date_picked" id="date_picked"><br>
                        <span id="Date_Error">&nbsp;</span>
                    </div>

                    <div class="field">
                        <label for="">Appointment for</label>
                        <select name="" id="">
                            <option value="" disabled="true" selected="selected">Service</option>
                        </select>
                    </div>

                    <div class="field">
                        <label for="">Preferred Time</label>
                        <select name="" id="">
                            <option value="" disabled="true" selected="selected">-- Choose time --</option>
                            <option value="">8:00am - 9:00am</option>
                            <option value="">9:00am - 10:00am</option>
                            <option value="">10:00am - 11:00am</option>
                            <option value="">11:00am - 12:00pm</option>
                            <option value="">12:00am - 1:00pm</option>
                        </select>
                    </div>

                    <div class="field">
                        <input type="button" value="Book Appointment" name="book">
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
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                    ></a>
            
                    <!-- Twitter -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-twitter"></i
                    ></a>
            
                    <!-- Google -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-google"></i
                    ></a>
            
                    <!-- Instagram -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-instagram"></i
                    ></a>
            
                    <!-- Linkedin -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                    ></a>
            
                    <!-- Github -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
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
            
                <!-- Section: Text -->
                <section class="mb-4">
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                    </p>
                </section>
                <!-- Section: Text -->
            
        
            </div>
            <!-- Grid container -->
        
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">hPharma</a>
            </div>
            <!-- Copyright -->
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/book_validate.js"></script>
    </body>
</html>