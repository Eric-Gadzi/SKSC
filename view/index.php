<?php
require_once("../controllers/cart_controller.php");
session_start();
$ip_add = $_SESSION['user_ip'];
$countProducts = countCart($ip_add);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SHE KNOWS SHE CAN</title>
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
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Welfare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="causes.php" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
          <!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="event.php" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
          <li class="nav-item"><a href="volunteers.php" class="nav-link">Volunteers</a></li>
          <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
          <li class="nav-item"><a href="cart.php" class="nav-link">Cart <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-primary"><?php echo $countProducts ?></span></a></li>
          <li class="nav-item"><a type="button" href="#" data-toggle="modal" data-target="#modalLogin" class="nav-link btn btn-sm-primary">Admin</a></li>
          <?php 
            if(isset($_SESSION['isAdmin'])){
              echo "<li class='nav-item'><a type='button' href='../settings/session_destroy.php' class='nav-link btn btn-primary'>Logout</a></li>";
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is Not An Option of Our Life</h1>

          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-counter ftco-intro" id="section-counter">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-1 align-items-stretch">
            <div class="text">
              <span>Served Over</span>
              <strong class="number" data-number="30">0</strong>
              <span>Teenagers in 20 rural areas in 16 region in Ghana</span>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-2 align-items-stretch">
            <div class="text">
              <h3 class="mb-4">Donate Money</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts.</p>
              <p><a href="#" class="btn btn-white px-3 py-2 mt-2" data-toggle="modal" data-target="#exampleModalCenter">Donate Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-3 align-items-stretch">
            <div class="text">
              <h3 class="mb-4">Be a Volunteer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts.</p>
              <p><a href="#volunteer" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Make Donation</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Become A Volunteer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Sponsorship</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-5 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Causes</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="carousel-cause owl-carousel">
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Clean water for the urban area</a></h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/cause-2.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Clean water for the urban area</a></h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/cause-3.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Clean water for the urban area</a></h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/cause-4.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Clean water for the urban area</a></h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/cause-5.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Clean water for the urban area</a></h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/cause-6.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Clean water for the urban area</a></h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Latest Donations</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="d-flex mb-4">
              <div class="img" style="background-image: url(images/person_1.jpg);"></div>
              <div class="info ml-4">
                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                <span class="position">Donated Just now</span>
                <div class="text">
                  <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="d-flex mb-4">
              <div class="img" style="background-image: url(images/person_2.jpg);"></div>
              <div class="info ml-4">
                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                <span class="position">Donated Just now</span>
                <div class="text">
                  <p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="d-flex mb-4">
              <div class="img" style="background-image: url(images/person_3.jpg);"></div>
              <div class="info ml-4">
                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                <span class="position">Donated Just now</span>
                <div class="text">
                  <p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-gallery">

    <div class="d-md-flex">
      <a href="images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">

        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-3.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-4.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
    </div>
    <div class="d-md-flex">
      <a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-6.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_3.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_2.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Recent from blog</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Sept 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Sept 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Sept 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Latest Events</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Sep. 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-2.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Sep. 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-3.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Sep. 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="volunteer" class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row d-md-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
        </div>
        <div class="col-md-6 volunteer pl-md-5 ftco-animate">
          <h3 class="mb-3">Be a volunteer</h3>
          <form action="../actions/add_volunteer.php" method="POST" class="volunter-form" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name" id="user_name" name="user_name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your Email" id="user_email" name="user_email" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" placeholder="Your Telephone" id="user_contact" name="user_contact" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Country" id="user_country" name="user_country" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="user_city" name="user_city" placeholder="City" required>
            </div>
            <div class="form-group">
              <label for="user_image" class="text-white">Profile Image</label><br>
              <input type="file" accept="image/*" name="user_image" id="user_image" required>
            </div>
            <div class="form-group">
              <textarea cols="30" rows="3" class="form-control" id="user_message" name="user_message" placeholder="Message(Why Do You Want To Join She Knows She Can)">
            </textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Become A Volunteer" class="btn btn-white py-3 px-5" required>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body bg-primary">
          <h3 class="mb-2 text-white">Save A Teenager Today</h3>
          <form action="" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name" id="donor_name" name="user_name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your Email" id="donor_email" name="user_email" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" placeholder="Your Telephone" id="donor_contact" name="user_contact" required>
            </div>

            <div class="form-group">
              <input type="number" class="form-control" placeholder="AMOUNT GHC" id="donor_amount" name="user_amount" required>
            </div>
            <div class="form-group">
              <label class="text-white">Comment</label>
              <textarea cols="30" rows="3" class="form-control" id="donor_message" name="user_message" placeholder="Message(Why Do You Want To Join She Knows She Can)">
            </textarea>
            </div>
            <!-- <div class="form-group">
              <input type="submit" name = "submit" value="Become A Volunteer" class="btn btn-white py-3 px-5" required>
            </div>             -->
        </div>
        <div class="modal-footer bg-primary"> -->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button onclick="payWithPaystack()" type="submit" class="btn btn-success">Make Donation</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- modals -->

  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="../actions/login_process.php">
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
           
              <input type="email" name="email" id="defaultForm-email" class="form-control validate" required>
              <label data-error="wrong" data-success="right" for="defaultForm-email" >Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text" style="display: inline;"></i>
            <input type="password" name="password" id="defaultForm-pass" class="form-control validate" required>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
        </form>
        

      </div>
    </div>
  </div>


  <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <h2 class="m-3 text-center text-success">
            DONATION MADE SUCCESSFULLY

          </h2>
        </div>
        <div class="modal-footer">
          <button type="button" href="" class="btn btn-outline-primary" data-dismiss="modal" onclick="window.location.href = '#volunteer'">Ok</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="failed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <h3>
            PROBLEM WITH PROCESSING DONATION
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

  <script src="https://js.paystack.co/v2/inline.js" async defer></script>
  <script>
    function payWithPaystack() {
      event.preventDefault();
      let user_name = document.getElementById("donor_name").value;
      let user_email = document.getElementById("donor_email").value;
      let user_contact = document.getElementById("donor_contact").value;
      let user_amount = document.getElementById("donor_amount").value;


      let handler = PaystackPop.setup({
        key: 'pk_test_bed9ac10a9fd731dd3af495d9160b4a59b72217a', // Replace with your public key
        email: user_email,
        amount: user_amount * 100, //amount.value * 100,

        callback: function(response) {
          let message = 'Payment complete! Reference: ' + response.reference;

          const xhttp = new XMLHttpRequest();
          xhttp.open("GET", `../actions/donation.php?user_name=${user_name}&user_email=${user_email}&user_contact=${user_contact}&user_country=${user_country}&user_city=${user_city}&user_message=${user_message}&reference=${response.reference}`);
          xhttp.send();

          xhttp.onreadystatechange = function() {
            //    alert(this.responseText);

            $('#exampleModalCenter').modal('hide');

            $('#success').modal('show');



          }


          // window.location.href = `../actions/donation.php?user_name=${user_name}&user_email=${user_email}&user_contact=${user_contact}&user_country=${user_country}&user_city=${user_city}&user_message=${user_message}&reference=${response.reference}`;

        },
        onClose: function() {
          $('#failed').modal('show');
        }
      });
      handler.openIframe();
    };
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