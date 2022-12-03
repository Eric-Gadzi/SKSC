<?php
require_once("../functions/volunteer_functions.php");

$role = "3";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Volunteers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<script>
    document.onload = document.getElementById('donate').scrollIntoView(true);
</script>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Welfare</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <!-- <li class="nav-item"><a href="causes.php" class="nav-link">Causes</a></li> -->
                    <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
                    <li class="nav-item active"><a href="volunteer.php" class="nav-link">Volunteers</a></li>
                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <!-- <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li> -->
                    <li class="nav-item "><a href="event.php" class="nav-link">Events</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Donate</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
                </div>
            </div>
        </div>
    </div>


    <section id="volunteer" class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Updating a volunteer</h3>
                    <form action="../actions/update_volunteer.php" method="GET" class="volunter-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" id="user_name" name="user_name" value="<?php echo $_GET['user_name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" value="<?php echo $_GET['user_email'] ?>" class="form-control" placeholder="Your Email" id="user_email" name="user_email" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Your Telephone" id="user_contact" name="user_contact" value="<?php echo $_GET['user_contact'] ?>" required>
                        </div>
                        <input type="hidden" class="form-control" value="<?php echo $_GET['user_id'] ?>" placeholder="Country" id="user_id" name="user_id" required>

                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $_GET['user_country'] ?>" placeholder="Country" id="user_country" name="user_country" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="user_city" name="user_city" value="<?php echo $_GET['user_city'] ?>" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <textarea rows="3" class="form-control" value="<?php echo $_GET['user_message'] ?>" id="user_message" name="user_message" placeholder="Message(Why Do You Want To Join She Knows She Can)">
            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" onclick="ajax()" value="Become A Volunteer" class="btn btn-white py-3 px-5" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Site Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Home</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Donate</a></li>
                            <li><a href="#" class="py-2 d-block">Causes</a></li>
                            <li><a href="#" class="py-2 d-block">Event</a></li>
                            <li><a href="#" class="py-2 d-block">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <h2 class="m-3 text-center text-success">
            SUCCESSFUL
        </h2>
      </div>
      <div class="modal-footer">
        <button type="button" href="./volunteers.php" class="btn btn-outline-primary" data-dismiss="modal" onclick="window.location.href = 'volunteers.php'">Ok</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="failed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <h3>
            FAILED
        </h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script>
        function ajax() {
            event.preventDefault();

            let user_name = document.getElementById("user_name").value;
            let user_email = document.getElementById("user_email").value;
            let user_contact = document.getElementById("user_contact").value;
            let user_country = document.getElementById("user_country").value;
            let user_city = document.getElementById("user_city").value;
            let user_message = document.getElementById("user_message").value;
            let user_id = document.getElementById("user_id").value;


            alert(user_name);

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
            //    alert(this.responseText);

               if(this.responseText == 1){
                $('#success').modal('show');
               }else{
                $('#failed').modal('show');
               }
                  
            }
            xhttp.open("GET", `../actions/update_volunteer.php?user_name=${user_name}&user_email=${user_email}&user_contact=${user_contact}&user_country=${user_country}&user_city=${user_city}&user_message=${user_message}&user_id=${user_id}`);
            xhttp.send();
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>