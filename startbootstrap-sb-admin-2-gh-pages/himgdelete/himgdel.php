<?php
session_start();
include "../conn.php";

if (!empty('text')) {
    $sno = $_GET['text'];
    $del1 = "DELETE FROM `hdslideimg` WHERE `sno`='$sno'";
    $del2 = mysqli_query($con,$del1);
    if ($del2) {
        header("location: ../hImages&Cards.php");
        $_SESSION['deleteimg']="FILE DELETED";
    }
    else{
        $_SESSION['deleteimgfail']="FILE NOT DELETED";
        header("location: ../hImages&Cards.php");
    }
}
?>