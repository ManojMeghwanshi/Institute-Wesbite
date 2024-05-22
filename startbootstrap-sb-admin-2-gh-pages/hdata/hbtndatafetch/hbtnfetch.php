<?php
include "../startbootstrap-sb-admin-2-gh-pages/conn.php";
// hbtn 1
$h="SELECT * FROM `hbtn1`";
$run = mysqli_query($con,$h);
$btn1 = mysqli_fetch_array($run);

// Slide Course headline
$h1="SELECT * FROM `hbtn2`";
$run1 = mysqli_query($con,$h1);
$btn2 = mysqli_fetch_array($run1);

// Banner Course Headline
$h2="SELECT * FROM `hbtn3`";
$run2 = mysqli_query($con,$h2);
$btn3 = mysqli_fetch_array($run2);
?>