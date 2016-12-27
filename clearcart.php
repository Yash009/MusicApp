<?php
/**
 * Created by PhpStorm.
 * User: YASH CHATURVEDI
 * Date: 12/19/2016
 * Time: 2:58 PM
 */
session_start();
unset($_SESSION['cart']);
header("Location: DisplayTracks.php");//use for the redirection to some page

?>
