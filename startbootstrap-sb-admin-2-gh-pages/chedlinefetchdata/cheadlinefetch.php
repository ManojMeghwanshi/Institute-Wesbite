<?php
include "../startbootstrap-sb-admin-2-gh-pages/conn.php";
$c1="SELECT * FROM `cheadline&para`";
$c2=mysqli_query($con,$c1);
$c3=mysqli_fetch_array($c2);
?>
