<?php
include "header.php";
include "hdata/himgdatafetch/himgfetch.php";
?>
<div class="m-4">
    <div class="row">
        <div class="col-sm">
            <h3>Top Header image</h3>
            <form action="hdata/himgcardinsert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Insert Image</label>
                    <input type="hidden" name="text1" value="<?php echo $img['sno']; ?>">
                    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="topheaderimage" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <input type="submit" class="btn btn-primary" name="topimagesubmit">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Slide Course Add Cards</h3>
            <h6>Add Cards</h6>
            <form action="hdata/himgcardinsert.php" method="POST" enctype="multipart/form-data">
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">New Card Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">New Card Paragraph</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="slideimg" required>
                </div>


                <input type="submit" class="btn btn-primary" name="slidecardsubmit">
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>Slide Course Delete Cards</h3>
            <h6>Delete Cards</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">sno</th>
                        <th scope="col">Image</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Delete2</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($img2 = mysqli_fetch_array($a4)) { ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $img2['image'] ?></td>

                            <td>
                                <a href="himgdelete/himgdel.php?text=<?php echo $img2['sno']; ?>" >Delete</a>
                            </td>
                            <!-- <td>
                                <button onclick="myfunction()" >Delete2</button>
                            </td> -->

                        </tr>
                    <?php $i++;
                    }
                    ?>
                    <?php
                    // if (isset($_SESSION['deleteimg'])) {
                    ?>
                    <?php
                        // unset($_SESSION['deleteimgfail']);
                    // }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Main Banner Course Image</h3>
            <form action="hdata/himgcardinsert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="hidden" name="text1" value="<?php if (!empty($bimg)) {
                                                                    echo $bimg['sno'];
                                                                } ?>">
                    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="bannerimg" required>
                </div>
                <input type="submit" class="btn btn-primary" name="bannerimgsubmit">
            </form>

        </div>
    </div>
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Mission Card Image</h3>
            <form action="hdata/himgcardinsert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="hidden" name="text3" value="<?php if (($mimg)) {
                                                                    echo $mimg['sno'];
                                                                } ?> ">
                    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="missionimg" required>
                </div>
                <input name="MCI" type="submit" class="btn btn-primary">
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>Vision Card Image</h3>
            <form action="hdata/himgcardinsert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="hidden" name="text2" value="<?php if ($vimg) {
                                                                    echo $vimg['sno'];
                                                                } ?>">
                    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="visionimg" required>
                </div>
                <input type="submit" class="btn btn-primary" name="VCI">
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>