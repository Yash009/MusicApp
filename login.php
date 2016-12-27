<?php
session_start();//session starts here

?>
    <!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Boss - Professional Bootstrap Template</title>
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
                                <a href="pages-sign-up.php" class="fa-copy ">Signup</a>
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

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-body">
                    <br>
                    <br>
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="emailid" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>


                            <input class="btn btn-primary btn-block" type="submit" value="Login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                            <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<br>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>

</html>

<?php

include("config.php");

if(isset($_POST['login']))
{
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];

    $check_user="select * from admin WHERE emailid='$emailid'AND password='$password'";

    $run=mysqli_query($mysqli,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('DisplayTracks.php','_self')</script>";

        $_SESSION['emailid']=$emailid;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>