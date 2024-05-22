<?php
session_start();
include "../conn.php";

// top header image
if (!empty($_POST['topimagesubmit'])) {
    $tsno = $_POST['text'];
    $image = $_FILES['topheaderimage']['name'];
    $image_tmp = $_FILES['topheaderimage']['tmp_name'];
    $image_folder = "image/" . $image;

    // Retrieve previous image filename from the database
    $prev_image_query = "SELECT `img` FROM `hdtopheaderimag` WHERE `sno`= '$tsno'";
    $prev_image_result = mysqli_query($con, $prev_image_query);
    $prev_image_row = mysqli_fetch_assoc($prev_image_result);
    $prev_image_filename = $prev_image_row['img'];

    $q = "UPDATE `hdtopheaderimag` SET `img`='$image' WHERE `sno`= 1";
    $run = mysqli_query($con, $q);

    if ($run) {
        // Move the new image to the folder
        move_uploaded_file($image_tmp, $image_folder);

        // Delete the previous image file if it exists
        if (!empty($prev_image_filename)) {
            $prev_image_path = "image/" . $prev_image_filename;
            if (file_exists($prev_image_path)) {
                unlink($prev_image_path);
            }
        }

        $_SESSION['imgsuccess'] = "DATA INSERTED   SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    } else {
        $_SESSION['imgfail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    }
}


// Slide cards in home page
if (!empty($_POST['slidecardsubmit'])) {
    $image = $_FILES['slideimg']['name'];
    $image_tmp = $_FILES['slideimg']['tmp_name'];
    $image_folder = "hslidercardimage/" . $image;


    $q = "INSERT INTO `hdslideimg`(`image`) VALUES ('$image')";
    $run = mysqli_query($con, $q);

    if ($run) {
        // Move the new image to the folder
        move_uploaded_file($image_tmp, $image_folder);

        $_SESSION['imgsuccess'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    } else {
        $_SESSION['imgfail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    }
}


// Course banner img
if (!empty($_POST['bannerimgsubmit'])) {
    $bsno = $_POST['text1'];
    $banner_image = $_FILES['bannerimg']['name'];
    $banner_image_tmp = $_FILES['bannerimg']['tmp_name'];
    $banner_image_folder = "bannerimgfolder/" . $banner_image;

    // Retrieve previous image filename from the database
    $prev_image_query1 = "SELECT `image` FROM `hbannerimg` WHERE `sno`= $bsno";
    $prev_image_result1 = mysqli_query($con, $prev_image_query1);
    $prev_image_row1 = mysqli_fetch_assoc($prev_image_result1);
    $prev_image_filename1 = $prev_image_row1['image'];

    $q = "UPDATE `hbannerimg` SET `image`='$banner_image' WHERE `sno`= $bsno";
    $run = mysqli_query($con, $q);

    if ($run) {
        // Move the new image to the folder
        move_uploaded_file($banner_image_tmp, $banner_image_folder);

        // Delete the previous image file if it exists
        if (!empty($prev_image_filename1)) {
            $prev_image_path1 = "bannerimgfolder/" . $prev_image_filename1;
            if (file_exists($prev_image_path1)) {
                unlink($prev_image_path1);
            }
        }
        $_SESSION['imgsuccess'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    } else {
        $_SESSION['imgfail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    }
}


// Vision card image
if (!empty($_POST['VCI'])) {
    $b1 = $_POST['text2'];
    $b2 = $_FILES['visionimg']['name'];
    $b2_tmp = $_FILES['visionimg']['tmp_name'];
    $banner_image_folder = "hvisionimg/" . $b2;

    // Retrieve previous image filename from the database
    $prev_image_query2 = "SELECT `img` FROM `hvisionimg` WHERE `sno`= $b1";
    $prev_image_result2 = mysqli_query($con, $prev_image_query2);
    $prev_image_row2 = mysqli_fetch_assoc($prev_image_result2);
    $prev_image_filename2 = $prev_image_row2['img'];

    $q = "UPDATE `hvisionimg` SET `img`='$b2' WHERE `sno`= $b1";
    $run = mysqli_query($con, $q);

    if ($run) {
        // Move the new image to the folder
        move_uploaded_file($b2_tmp, $banner_image_folder);

        // Delete the previous image file if it exists
        if (!empty($prev_image_filename2)) {
            $prev_image_path2 = "hvisionimg/" . $prev_image_filename2;
            if (file_exists($prev_image_path2)) {
                unlink($prev_image_path2);
            }
        }
        $_SESSION['imgsuccess'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    } else {
        $_SESSION['imgfail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    }
}


// Mission card image
if (!empty($_POST['MCI'])) {
    $b1 = $_POST['text3'];
    $b2 = $_FILES['missionimg']['name'];
    $b2_tmp = $_FILES['missionimg']['tmp_name'];
    $banner_image_folder = "hmissionimg/" . $b2;

    // Retrieve previous image filename from the database
    $prev_image_query2 = "SELECT `img` FROM `hmissionimg` WHERE `sno`= $b1";
    $prev_image_result2 = mysqli_query($con, $prev_image_query2);
    $prev_image_row2 = mysqli_fetch_assoc($prev_image_result2);
    $prev_image_filename2 = $prev_image_row2['img'];

    $q = "UPDATE `hmissionimg` SET `img`='$b2' WHERE `sno`= $b1";
    $run = mysqli_query($con, $q);

    if ($run) {
        // Move the new image to the folder
        move_uploaded_file($b2_tmp, $banner_image_folder);

        // Delete the previous image file if it exists
        if (!empty($prev_image_filename2)) {
            $prev_image_path2 = "hmissionimg/" . $prev_image_filename2;
            if (file_exists($prev_image_path2)) {
                unlink($prev_image_path2);
            }
        }
        $_SESSION['imgsuccess'] = "DATA INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    } else {
        $_SESSION['imgfail'] = "DATA NOT INSERTED SUCCESSFULLY !";
        header('location:../hImages&Cards.php');
    }
}