<?php
include "header.php";
include "conn.php";
$q = "SELECT * FROM `hformheadline`";
$run = mysqli_query($con, $q);
$sno = mysqli_fetch_array($run);
?>
<div class="m-4">
    <div class="row">
        <div class="col-sm">
            <h3>form Headline & Paragraph</h3>
            <form action="hdata/hforminsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Headline</label>
                    <input type="text" name="text1" value="<?php echo $sno['sno']; ?>" style="display: none;" >
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hformheadline" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Paragraph</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="hformpara" required>
                </div>
                <input type="submit" class="btn btn-primary" name="hformbtn">
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>