<?php
include "header.php";
include "../startbootstrap-sb-admin-2-gh-pages/chedlinefetchdata/cheadlinefetch.php";
?>
<div class="m-4">
    <div class="row">
        <div class="col-sm">
            <h3>Top Headline</h3>
            <form action="cdata/cheadlineinsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Headline 1</label>
                    <input type="text" hidden name="text1" value="<?php echo $c3['sno']?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="CH" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Color Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="CCH" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Small headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="CSH" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Small color headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="CSCH" required>
                </div>
                <input type="submit" class="btn btn-primary" name="CH&P">
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>s