<!-- login -->
<?php
session_start();
 if (isset($_SESSION['loginsuccess']) && ($_SESSION['loginsuccess'])) { ?>
    <script>
        swal({
            icon: "success",
            title: "<?php echo $_SESSION['loginsuccess'] ?>",
            text: "welcome",
            // footer: '<a href="#">Why do I have this issue?</a>'
        });
    </script>
<?php unset($_SESSION['loginsuccess']);
} elseif (isset($_SESSION['loginfail'])) { ?>
    <script>
        swal({
            icon: "error",
            title: "<?php echo $_SESSION['loginfail'] ?>",
            text: "Something went wrong!",
            // footer: '<a href="#">Why do I have this issue?</a>'
        });
    </script><?php
                unset($_SESSION['loginfail']);
            } ?>