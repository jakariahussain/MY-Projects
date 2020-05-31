<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rich Meat ||</title>
    <!--    <link rel="shortcut icon" href="images/favicon-72x72.jpg" type="image/x-icon">-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawesome.min.css -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive.css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- cross-browser-compatibility -->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.js"></script>


</head>

<body>
    <!--===============================================
                    Start Header-top
================================================-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rct_address_wrap">
                        <div class="rmt_address">
                            <p><strong>Address: </strong> Road no. 09, 03 street, cape Town</p>
                        </div>
                        <div class="rmt_contact">
                            <ul>
                                <li>Call Us: <a href="tel:+880 (2222) 920 283">+880 (2222) 920 283</a></li>
                                <li>Email Us: <a href="mailto:rich_meat.info@gmail.com">rich_meat.info@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--============ End rct_address_wrapp ============-->
                </div>
            </div>
        </div>
    </div>
    <!--============ End Header-top ============-->

    <!--===============================================
                    Start Header
================================================-->
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-2">
                        <div class="logo">
                            <a href="index.php">Rich Meat</a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-10">
                        <div class="primary_menu">
                            <nav>
                                <ul>
                                    <?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
                                    
                                    <li <?php if ($page == 'index.php') { ?>class="active" <?php } ?>>
                                        <a href="index.php">Home </a>
                                    </li>
                                    <li <?php if ($page == 'about.php') { ?>class="active" <?php } ?>>
                                        <a href="about.php"> About Us </a>
                                    </li>
                                    <li <?php if ($page == 'service.php') { ?>class="active" <?php } ?>>
                                        <a href="service.php">Services</a>
                                    </li>
                                    <li>
                                        <a href="pdf/dummy.pdf" download>Our Menus</a>
                                    </li>
                                    <li <?php if ($page == 'gallery.php') { ?>class="active" <?php } ?>>
                                        <a href="gallery.php">Our Gallery</a>
                                    </li>
                                    <li <?php if ($page == 'contact.php') { ?>class="active" <?php } ?>>
                                        <a href="contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--============ End Primary_menu ============-->
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <li><a href="index.php">Home </a></li>
                            <li><a href="about.php"> About Us </a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="">Our Menus</a></li>
                            <li><a href="gallery.php">Our Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </div>
                        <span id="sidemenuarea" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

                    </div>
                </div>
            </div>
        </div>
        <!--============ End Header ============-->
    </header>