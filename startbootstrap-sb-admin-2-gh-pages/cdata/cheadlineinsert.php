<?php
// session_start();
include "../startbootstrap-sb-admin-2-gh-pages/conn.php";

// top headline & paragraph
if (!empty($_POST['CH&P'])) {
    $sno = $_POST['text1'];
    $C1 = $_POST['CH'];
    $C2 = $_POST['CCH'];
    $S1 = $_POST['CSH'];
    $S2 = $_POST['CSCH'];

    $q1 = "UPDATE `cheadline&para` SET `headline`='$C1',`smallheadline`='$S1',`colorheadline`='$C2',`smallcheadline`='$S2' WHERE `sno`='$sno'";
    $run1 = mysqli_query($con, $q1);

    if ($run1) {
        header('location:../cheadline.php');
        $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY !";
    } else {
        // header('location:../cheadline.php');
        $_SESSION['fail'] = "DATA NOT INSERTED SUCCESSFULLY !";
    }
}
