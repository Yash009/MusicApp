<?php
/**
 * Created by PhpStorm.
 * User: PraviinM
 * Date: 2/7/16
 * Time: 3:29 PM
 */

//print_r($_POST);

require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$employeeid = $_POST['employeeid'];
$emailid = $_POST['emailid'];
$password = $_POST['password'];

//print $fname;


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$query = "INSERT INTO  admin VALUES ( '$firstname','$lastname', '$employeeid','$emailid','$password')";
echo 'hello'+ $firstname;
//Block 5
mysqli_query ($mysqli, $query)
or die ("Error querying database");

//Block 7
mysqli_close($mysqli);

?>

