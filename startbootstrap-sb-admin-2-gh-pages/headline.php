<?php
include "conn.php";
include "header.php";

?>
<div class="m-4">
    <div class="row">
        <div class="col-sm">
            <h3>Top Headline & Paragraph</h3>
            <form action="hdata/hheadinsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Headline</label>
                    <input type="text" class="form-control" name="headline" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Color Headline</label>
                    <input type="text" class="form-control" name="headline2" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Paragraph</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="paragraph" required>
                </div>
                <!-- <label for="btn">Submit</label> -->
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>Scroll Course Headline</h3>
            <form action="hdata/hheadinsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sheadline" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Color Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="scheadline" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <input type="submit" class="btn btn-primary" name="Courseheadline">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Course banner headline</h3>
            <form action="hdata/hheadinsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Coursebanner" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Paragrapgh</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Coursebannerp" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
                <input type="submit" class="btn btn-primary" name="CBH">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Vision Card headline & Paragraph</h3>
            <form action="hdata/hheadinsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="VisionCardheadline" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Paragraph</label>
                    <textarea class="form-control" id="exampleInputPassword1" name="VisionCardpara" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" name="VCH">
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>Mission Card headline & Paragraph</h3>
            <form action="hdata/hheadinsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="MissionCardheadline" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Paragraph</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="MissionCardpara" required>
                </div>
                <input type="submit" class="btn btn-primary" name="MCH">
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>