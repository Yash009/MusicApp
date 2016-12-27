<?php
session_start(); ?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>MusicApp</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    </head>
    <body>

        <!-- Header -->
        <div id="header" style="background-position: 50% 0%; <br />
<b>Notice</b>:  Undefined variable: full_page in <b>C:\xampp\htdocs\bootstrap\html\php\header.php</b> on line <b>46</b><br />
" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php" title="">
                            <img src="assets/img/music.jpg" alt="Logo" />
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <!-- Top Menu -->
                <div id="hornav" class="row text-light">
                    <div class="col-md-12">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.php" class="fa-home active">Home</a>
                                </li>

                                <?php if ($_SESSION) { ?>
                                    <li><a href= "#" class="fa-comment">WELCOME <?php echo $_SESSION['emailid'];  ?> </a></li>
                                    <li><a href="logout.php" class="fa-gears">LOGOUT</a></li>
                                    <?php
                                }

                                ?>
                                <?php if (!$_SESSION) { ?>
                                    <li><a href="login.php" class="fa-gears">LOGIN</a></li>
                                    <?php
                                }

                                ?>
                                <li>
                                    <a href="pages-sign-up.html" class="fa-copy ">Signup</a>
                                </li>
                                <li>
                                    <a href="DisplayTracks.php" class="fa-copy ">MusicList</a>
                                    <ul>
                                        <!--  <li>
                                              <a href="portfolio-2-column.html">2 Column</a>
                                          </li>
                                          <li>
                                              <a href="portfolio-3-column.html">3 Column</a>
                                          </li>
                                          <li>
                                              <a href="portfolio-4-column.html">4 Column</a>
                                          </li>
                                          <li>
                                              <a href="portfolio-6-column.html">6 Column</a>
                                          </li>-->
                                    </ul>
                                </li>
                                <?php if ($_SESSION) { ?>
                                <li>
                                    <a href="admin.php" class="fa-font ">Admin</a>
                                    <?php
                                    }
                                    ?>
                                    <?php if ($_SESSION) { ?>
                                <li>
                                    <a href="cart.php" class="fa-shopping-cart ">Cart</a>
                                </li>

                            <?php
                            }
                            ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Top Menu -->
            </div>
        </div>
        <div id="hornav" class="row text-light">
            <div class="col-md-12">
                <div class="text-center visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="index.php" class="fa-home active">Home</a>
                        </li>
                        <li>
                            <a href="pages-login.html"  class="fa-gears ">Login</a>

                        </li>
                        <li>
                            <a href="pages-sign-up.html" class="fa-copy ">Signup</a>
                        </li>
                        <li>
                            <a href="DisplayTracks.php" class="fa-copy ">MusicList</a>
                            <ul>
                                <!--  <li>
                                      <a href="portfolio-2-column.html">2 Column</a>
                                  </li>
                                  <li>
                                      <a href="portfolio-3-column.html">3 Column</a>
                                  </li>
                                  <li>
                                      <a href="portfolio-4-column.html">4 Column</a>
                                  </li>
                                  <li>
                                      <a href="portfolio-6-column.html">6 Column</a>
                                  </li>-->
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="fa-font ">Admin</a>
                        </li>
                        <li>
                            <a href="#" class="fa-comment ">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                        <form method="post" action="SearchedTrack.php">
                            <div class="form-group">
                                <input type="text" name="Search" align="center"  class="form-control" placeholder="Search by track name,Genre,Artist"><br>

                                <input class="btn btn-primary" style="margin-left: 600px" name="search"  type="submit" value="Search" style="margin-top: 15px">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Top Menu -->
            </div>
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->


        <div id="welcome" class="background-white">
            <div class="container">
                <div class="row margin-vert-40">
                    <!-- Main Text -->
                    <div class="col-md-12">
                        <h2 class="text-center article-title">Welcome to MusicApp</h2>
                        <p class="text-center">Welcome to music app the fast,easy and interactive way to download music.</p>


            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Stellar Parallax -->
            <script type="text/javascript" src="assets/js/jquery.stellar.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->