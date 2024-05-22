<?php
include "header.php";
?>
<div class="m-4">
    <div class="row">
        <div class="col-sm">
            <h3>Headline</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Headline</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>Small Paragraph</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Paragraph</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h3> Add New FAQ </h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Question 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="m-2 col-sm">
            <h3>FAQ Question Delete</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Question</th>
                        <!-- <th scope="col">Last</th>
                        <th scope="col">Handle</th> -->
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>What is the vision of vanni coaching</td>
                        <!-- <td>Otto</td>
                        <td>@mdo</td> -->
                        <td><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>