<?php
include "header.php";
?>
<div class="m-4">
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Add Course Cards</h3>
            <form action="cdata/ccardsinsert.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">New Card Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="headline" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">New Card Paragraph</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="para" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file"  id="exampleInputEmail1" aria-describedby="emailHelp" name="img" required>
                </div>
                <input type="submit" class="btn btn-primary" name="btn">
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>Delete Course Cards</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Main Banner Course Image</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="m-2 col-sm">
            <h3>Mission Card Image</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>Vision Card Image</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>