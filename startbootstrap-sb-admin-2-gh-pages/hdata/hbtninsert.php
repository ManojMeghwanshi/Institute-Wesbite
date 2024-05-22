<?php
include "../conn.php";
session_start();

if (!empty($_POST['hbtn1'])) {
    $sno = $_POST['text1'];
    $h7 = $_POST['btn1'];

    $q4 = "UPDATE `hbtn1` SET `btnlabel`='$h7' WHERE `sno`=$sno";
    $run4 = mysqli_query($con, $q4);

    if ($run4) {
        header('location:../hbuttonlabel.php');
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
    } else {
        header('location:../hbuttonlabel.php');
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
    }
}


if (!empty($_POST['hbtn2'])) {
    $sno = $_POST['text2'];
    $h7 = $_POST['btn2'];

    $q4 = "UPDATE `hbtn2` SET `btnlabel`='$h7' WHERE `sno`=$sno";
    $run4 = mysqli_query($con, $q4);

    if ($run4) {
        header('location:../hbuttonlabel.php');
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
    } else {
        header('location:../hbuttonlabel.php');
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
    }
}


if (!empty($_POST['hbtn3'])) {
    $sno = $_POST['text3'];
    $h7 = $_POST['btn3'];

    $q4 = "UPDATE `hbtn3` SET `btnlabel`='$h7' WHERE `sno`=$sno";
    $run4 = mysqli_query($con, $q4);

    if ($run4) {
        header('location:../hbuttonlabel.php');
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
    } else {
        header('location:../hbuttonlabel.php');
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
    }
}

?>
