<?php
session_start();
include "../conn.php";

// top headline & paragraph
if (!empty($_POST['submit'])) {
    // $sno=$_POST['1'];
    $h1 = $_POST['headline'];
    $h2 = $_POST['headline2'];
    $p1 = $_POST['paragraph'];

    $q1 = "UPDATE `hheadline` SET `Content` = '$h1', `paragraph` = '$p1',`Content 2` = '$h2' WHERE `sno` = 1;";
    $run1 = mysqli_query($con, $q1);

    if ($run1) {
        header('location:../headline.php');
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
    } else {
        header('location:../headline.php');
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
    }
}


// Slide Course cards 
if (!empty($_POST['Courseheadline'])) {
    // $sno=$_POST['1'];
    $h3 = $_POST['sheadline'];
    $h4 = $_POST['scheadline'];

    $q2 = "UPDATE `hslidecourseheadline` SET `headline` = '$h3', `Colorheadline` = '$h4' WHERE `sno` = 1;";
    $run2 = mysqli_query($con, $q2);

    if ($run2) {
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../headline.php');
        // printf("Access granted");
    } else {
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../Social.php');
    }
}



// Course banner headline
if (!empty($_POST['CBH'])) {
    $h5 = $_POST['Coursebanner'];
    $h6 = $_POST['Coursebannerp'];

    $q3 = "UPDATE `hdcoursebannerheadline` SET `para`='$h5',`title`='$h6' WHERE `sno`= 1";
    $run3 = mysqli_query($con, $q3);

    if ($run3) {
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../headline.php');
    } else {
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../headline.php');
    }
}

// Vision card headline & pargraph
if (!empty($_POST['VCH'])) {
    $h7 = $_POST['VisionCardheadline'];
    $h8 = $_POST['VisionCardpara'];

    $q4 = "UPDATE `hdvisonheadline&para` SET `headline`='$h7',`paragraph`='$h8' WHERE `sno`=1";
    $run4 = mysqli_query($con, $q4);

    if ($run4) {
        header('location:../headline.php');
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
    } else {
        header('location:../headline.php');
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
    }
}


// Mission card headline & pargraph
if (!empty($_POST['MCH'])) {
    $h9 = $_POST['MissionCardheadline'];
    $h10 = $_POST['MissionCardpara'];

    $q5 = "UPDATE `hdmissionheadline&para` SET `headline`='$h9',`paragraph`='$h10' WHERE `sno`=1";
    $run5 = mysqli_query($con, $q5);

    if ($run5) {
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../headline.php');
    } else {
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../headline.php');
    }
}
