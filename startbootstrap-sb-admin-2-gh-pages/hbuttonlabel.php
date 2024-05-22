<?php
include "header.php";
include "hdata/hbtndatafetch/hbtnfetch.php";
?>
<div class="m-4">
    <div class="row">
        <div class="col-sm">
            <h3>Button 1</h3>
            <form action="hdata/hbtninsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Add New Label</label>
                    <input type="hidden" name="text1" value="<?php echo $btn1['sno'];?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="btn1" required>
                </div>
                <input type="submit" class="btn btn-primary" name="hbtn1">
            </form>
        </div>
        <div class="col-sm">
            <h3>Button 2</h3>
            <form action="hdata/hbtninsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Add New Label</label>
                    <input type="hidden" name="text2" value="<?php echo $btn2['sno'];?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="btn2">
                </div>
                <input type="submit" class="btn btn-primary" name="hbtn2">
            </form>
        </div>
        <div class="col-sm">
            <h3>Button 3</h3>
            <form action="hdata/hbtninsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Add New Label</label>
                    <input type="hidden" name="text3" value="<?php echo $btn3['sno'];?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="btn3">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <input type="submit" class="btn btn-primary" name="hbtn3">
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>