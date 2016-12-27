<?php
session_start(); ?>
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
    <form method="post" action="SearchedTrack.php">
    <div class="form-group">
        <input type="text" name="Search"   class="form-control" placeholder="Search by track name">

        <input class="btn btn-primary" style="margin-top: 15px;margin-left: 575px" name="search"  type="submit" value="Search For tracks">

    </div>

</form>
<?php
/**
 * Created by PhpStorm.
 * User: YASH CHATURVEDI
 * Date: 12/4/2016
 * Time: 9:23 PM
 */

include("config.php");
error_reporting(0);

 $result = $mysqli->query("SELECT *,a.Title as album,g.Name as genre,t.name as Name FROM `track` as t,album as a, genre as g WHERE t.AlbumId=a.AlbumId AND t.GenreId=g.GenreId ORDER BY t.TrackId ASC limit 100");
?>
    <table border="2"  bgcolor="">

    <tr>
        <td align="center"><b>Trackid</b></td>
        <td align="center"><b>Name</b></td>
        <td><b>Album</b></td>
        <td><b>Price</b></td>
        <td><b>Genre</b></td>
        <td align="center"><b>Composer</b></td>
    </tr>
    <tbody>
<?php

 $num = $result->num_rows;


 for($i=0; $i<$num ; $i++) {
 $item = mysqli_fetch_assoc($result); ?>

<tr>
           <td><p></><?php echo $item['TrackId'];?></p></td>
           <td><p><?php echo $item['Name'];?></p></td>
            <td><p><?php echo $item['album'];?></p></td>
            <td><p>$<?php echo $item['UnitPrice'];?></p></td>
            <td><p><?php echo $item['genre'];?></p></td>
            <td><p><?php echo $item['Composer'];?></p></td>
        <td><a class="btn btn-info" onclick ="add_to_cart(<?php echo $item['TrackId'];?>)">Add to cart</a></td>

        <?php
    }
    ?>
</tr>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    function add_to_cart(id) {
        $.post("add_to_cart.php", {id: id}, function(result){
            alert(result);
        });

    }
</script>
</body>
</html>


