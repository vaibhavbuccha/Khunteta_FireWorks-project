

<?php 

// this is the data base connection file .
session_start();
error_reporting(1);

$con = mysqli_connect("localhost","root","","fireworks") or die("getting error".mysqli_error());
//echo "connection done";

?>