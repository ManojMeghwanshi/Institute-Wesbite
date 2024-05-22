<?php
// session_start();
include "../startbootstrap-sb-admin-2-gh-pages/conn.php";

// Add Cards & Delete Cards
if (!empty($_POST['btn'])) {
    // $sno = $_POST['text1'];
    $h1 = $_POST['headline'];
    $p2 = $_POST['para'];
    $img = $_FILES['img']['name'];
    // $S2 = $_POST['CSCH'];

    $q1 = "INSERT INTO `caddcard&del` (`headline`, `paragraph`, `img`) VALUES ('$h1','$p2','$img')";
    $run1 = mysqli_query($con, $q1);

    if ($run1) {
        header('location:../cCards.php');
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
    } else {
        header('location:../cCards.php');
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
    }
}
