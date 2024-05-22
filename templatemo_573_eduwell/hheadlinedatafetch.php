<?php
include "../startbootstrap-sb-admin-2-gh-pages/conn.php";
// top heading & paragraph
$h="SELECT * FROM `hheadline`";
$run = mysqli_query($con,$h);
$row = mysqli_fetch_array($run);

// Slide Course headline
$h1="SELECT * FROM `hslidecourseheadline`";
$run1 = mysqli_query($con,$h1);
$row1 = mysqli_fetch_array($run1);

// Banner Course Headline
$h2="SELECT * FROM `hdcoursebannerheadline`";
$run2 = mysqli_query($con,$h2);
$row2 = mysqli_fetch_array($run2);

// Vision card headline & paragraph
$h3="SELECT * FROM `hdmissionheadline&para`";
$run3 = mysqli_query($con,$h3);
$row3 = mysqli_fetch_array($run3);


$h4="SELECT * FROM `hdvisonheadline&para`";
$run4 = mysqli_query($con,$h4);
$row4 = mysqli_fetch_array($run4);
?>