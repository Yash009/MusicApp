<?php
/**
 * Created by PhpStorm.
 * User: YASH CHATURVEDI
 * Date: 12/17/2016
 * Time: 12:00 AM
 */
session_start();
$result = "Track already in cart!!!";
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart']['ui'][] = $_POST['id'];
    $result = "Track added in cart!!! ";
}
else if (!in_array($_POST['id'], $_SESSION['cart']['ui'])) {
    $_SESSION['cart']['ui'][] = $_POST['id'];
    $result = "Track added in cart!!! ";
}
echo $result;
?>