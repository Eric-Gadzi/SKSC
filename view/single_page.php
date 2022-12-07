<?php
require_once("../functions/products_function.php");
require_once("../controllers/cart_controller.php");
session_start();
$ip_add = $_SESSION['user_ip'];
$countProducts = countCart($ip_add);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welfare - Free Bootstrap 4 Template by Colorlib</title>
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

    <style>
        body {
            background-color: #ecedee
        }

        .card {
            border: none;
            overflow: hidden
        }

        .thumbnail_images ul {
            list-style: none;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 10px
        }

        .thumbnail_images ul li {
            margin: 5px;
            padding: 10px;
            border: 2px solid #eee;
            cursor: pointer;
            transition: all 0.5s
        }

        .thumbnail_images ul li:hover {
            border: 2px solid #000
        }

        .main_image {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #eee;
            height: 400px;
            width: 100%;
            overflow: hidden
        }

        .heart {
            height: 29px;
            width: 29px;
            background-color: #eaeaea;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .content p {
            font-size: 12px
        }

        .ratings span {
            font-size: 14px;
            margin-left: 12px
        }

        .colors {
            margin-top: 5px
        }

        .colors ul {
            list-style: none;
            display: flex;
            padding-left: 0px
        }

        .colors ul li {
            height: 20px;
            width: 20px;
            display: flex;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer
        }

        .colors ul li:nth-child(1) {
            background-color: #6c704d
        }

        .colors ul li:nth-child(2) {
            background-color: #96918b
        }

        .colors ul li:nth-child(3) {
            background-color: #68778e
        }

        .colors ul li:nth-child(4) {
            background-color: #263f55
        }

        .colors ul li:nth-child(5) {
            background-color: black
        }

        .right-side {
            position: relative
        }

        .search-option {
            position: absolute;
            background-color: #000;
            overflow: hidden;
            align-items: center;
            color: #fff;
            width: 200px;
            height: 200px;
            border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
            left: 30%;
            bottom: -250px;
            transition: all 0.5s;
            cursor: pointer
        }

        .search-option .first-search {
            position: absolute;
            top: 20px;
            left: 90px;
            font-size: 20px;
            opacity: 1000
        }

        .search-option .inputs {
            opacity: 0;
            transition: all 0.5s ease;
            transition-delay: 0.5s;
            position: relative
        }

        .search-option .inputs input {
            position: absolute;
            top: 200px;
            left: 30px;
            padding-left: 20px;
            background-color: transparent;
            width: 300px;
            border: none;
            color: #fff;
            border-bottom: 1px solid #eee;
            transition: all 0.5s;
            z-index: 10
        }

        .search-option .inputs input:focus {
            box-shadow: none;
            outline: none;
            z-index: 10
        }

        .search-option:hover {
            border-radius: 0px;
            width: 100%;
            left: 0px
        }

        .search-option:hover .inputs {
            opacity: 1
        }

        .search-option:hover .first-search {
            left: 27px;
            top: 25px;
            font-size: 15px
        }

        .search-option:hover .inputs input {
            top: 20px
        }

        .search-option .share {
            position: absolute;
            right: 20px;
            top: 22px
        }

        .buttons .btn {
            height: 50px;
            width: 150px;
            border-radius: 0px !important
        }
    </style>
    <script>
        function changeImage(element) {

            var main_prodcut_image = document.getElementById('main_product_image');
            main_prodcut_image.src = element.src;
        }
    </script>
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
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="causes.php" class="nav-link">Causes</a></li>
                    <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
                    <!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="event.php" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
                    <li class="nav-item"><a href="volunteers.php" class="nav-link">Volunteers</a></li>
                    <li class="nav-item active"><a href="products.php" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-primary"><?php echo $countProducts ?></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Products From the Girls</h1>
                </div>
            </div>
        </div>
    </div>

    <section style="background-color: #eee;">
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6 border-end">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image"> <img src="<?php echo $_GET['product_image']; ?>" id="main_product_image" width="350"> </div>
                            <div class="thumbnail_images">
                                <ul id="thumbnail">
                                    <li><img onclick="changeImage(this)" src="<?php echo $_GET['product_image']; ?>" width="70"></li>
                                    <li><img onclick="changeImage(this)" src="<?php echo $_GET['product_image']; ?>" width="70"></li>
                                    <li><img onclick="changeImage(this)" src="<?php echo $_GET['product_image']; ?>" width="70"></li>
                                    <li><img onclick="changeImage(this)" src="<?php echo $_GET['product_image']; ?>" width="70"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 right-side flex-column d-flex">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3><?php echo $_GET['product_name']; ?></h3> <span class="heart"><i class='bx bx-heart'></i></span>
                            </div>
                            <div class="mt-2 pr-3 content">
                                <p><?php echo $_GET['product_description']; ?></p>
                            </div>
                            <h3>GHC <?php echo $_GET['product_price']; ?></h3>
                            <div class="ratings d-flex flex-row align-items-center">
                                <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i> </div>
                            </div>
                            <div class="mt-5"> <span class="fw-bold"></span>
                            </div>
                            <div class="buttons d-flex flex-row mt-5 gap-3 buttons-bottom"> <button class="btn btn-outline-dark">Go Back</button> <button class="btn btn-primary" onclick="window.location.href='../actions/add_cart.php?product_id=<?php echo $_GET['product_id']; ?>'">Add to Cart</button> </div>

                        </div>
                    </div>
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



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>



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