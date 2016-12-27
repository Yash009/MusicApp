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
<h1 style="text-align: center;margin-top: 50px" >Thankyou for shopping with MusicApp</h1><br><br>
<?php
/**
 * Created by PhpStorm.
 * User: YASH CHATURVEDI
 * Date: 12/4/2016
 * Time: 9:23 PM
 */

include("config.php");
error_reporting(0);
$ids = join($_SESSION['cart']['ui'],',');
$result = $mysqli->query("SELECT *,a.Title as album,g.Name as genre,t.name as Name FROM `track` as t,album as a, genre as g WHERE t.AlbumId=a.AlbumId AND t.GenreId=g.GenreId AND t.TrackId IN (".$ids.")");
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
    $total= 0;


    for($i=0; $i<$num ; $i++) {
    $item = mysqli_fetch_assoc($result); ?>

    <tr>
        <td><p></><?php echo $item['TrackId'];?></p></td>
        <td><p><?php echo $item['Name'];?></p></td>
        <td><p><?php echo $item['album'];?></p></td>
        <td><p>$<?php echo $item['UnitPrice'];?></p></td>
        <td><p><?php echo $item['genre'];?></p></td>
        <td><p><?php echo $item['Composer'];?></p></td>
        <?php $total = $item['UnitPrice'] + $total;?>



        <?php
        }
        ?>
        <td><p><?php echo 'The total Price is: '; echo $total;?></p></td>
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


