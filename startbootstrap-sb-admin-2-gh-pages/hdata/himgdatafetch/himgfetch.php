<?php
include "../startbootstrap-sb-admin-2-gh-pages/conn.php";
// top img
$a1="SELECT * FROM `hdtopheaderimag`";
$a2 = mysqli_query($con,$a1);
$img = mysqli_fetch_array($a2);

// slide image cards 
$a3="SELECT * FROM `hdslideimg`";
$a4 = mysqli_query($con,$a3);


// banner img
$a5="SELECT * FROM `hbannerimg`";
$a6=mysqli_query($con,$a5);
$bimg=mysqli_fetch_array($a6);

// Vision img
$a7="SELECT * FROM `hvisionimg`";
$a8=mysqli_query($con,$a7);
$vimg=mysqli_fetch_array($a8);

// Mission img
$a9="SELECT * FROM `hmissionimg`";
$a10=mysqli_query($con,$a9);
$mimg=mysqli_fetch_array($a10);
?>