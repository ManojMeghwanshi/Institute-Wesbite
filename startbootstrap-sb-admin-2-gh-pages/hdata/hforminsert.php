<?php
session_start();
include "../conn.php";
if (!empty($_POST['hformbtn'])) {
    $sno = $_POST['text1'];
    $h9 = $_POST['hformheadline'];
    $h10 = $_POST['hformpara'];

    $q5 = "UPDATE `hformheadline` SET `headline`='$h9',`paragraph`='$h10' WHERE `sno`= $sno";
    $run5 = mysqli_query($con, $q5);

    if ($run5) {
        // move_uploaded_file($slider_image_1_tmp, $slider_image_1_folder);
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../hform.php');
        // echo("Access granted");
    } else {
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../hform.php');
        // echo "Ac de";
    }
}
