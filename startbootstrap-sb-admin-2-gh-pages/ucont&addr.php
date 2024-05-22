<?php
include "header.php";
?>
<div class="m-4">
    <div class="row">
        <div class="col-sm">
            <h3>New Contact Add</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Add Mobile No.1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Add Mobile No.2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Add Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-sm">
            <h3>Add New Addres</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Add New Addres</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>