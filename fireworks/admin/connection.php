

<?php 

// this is the data base connection file .
session_start();
error_reporting(0);

$con = mysqli_connect("localhost","root","","fireworks") or die("getting error".mysqli_error());
//echo "connection done";

?>