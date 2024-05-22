            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
            <script src="js/sweetalert.js"></script>

            <!-- home headline -->
            <?php
            if (isset($_SESSION['success']) && $_SESSION['success'] != "") {
            ?>
                <script>
                    swal({
                        title: "<?php echo $_SESSION['success']; ?>",
                        icon: "success",
                        button: "Okay!",
                    });
                </script><?php
                            unset($_SESSION['success']);
                        } else {
                            ?>
                <script>
                    swal({
                        title: "<?php echo $_SESSION['fail']; ?>",
                        icon: "error",
                        button: "Okay!",
                    });
                </script><?php
                            unset($_SESSION['fail']);
                        }
                            ?>

            <!-- delete cards -->
            <?php
            if (isset($_SESSION['deleteimg']) && $_SESSION['deleteimg'] != "") {
            ?>
                <script>
                    // alert("you click delete button");
                    swal({

                        title: "<?php echo $_SESSION['deleteimg']; ?>",
                        text: "Your file will be deleted !",
                        icon: "success",
                        button: "Cancel"
                        // showCancelButton: true,
                        // confirmButtonColor: "#3085d6",
                        // cancelButtonColor: "#d33",
                        // confirmButtonText: "Yes, delete it!"
                    });
                </script><?php
                            unset($_SESSION['deleteimg']);
                        } else if (isset($_SESSION['deleteimgfail'])) {
                            ?>
                <script>
                    swal({
                        title: "<?php echo $_SESSION['deleteimgfail']; ?>",
                        text: "Your file will be not deleted",
                        icon: "error",
                        button: "Okay!",
                    });
                </script><?php
                            unset($_SESSION['deleteimgfail']);
                        }
                            ?>


            <!-- home add cards  -->
            <?php
            if (isset($_SESSION['imgsuccess']) && $_SESSION['imgsuccess'] != "") {
            ?>
                <script>
                    // alert("you click delete button");
                    swal({

                        title: "<?php echo $_SESSION['imgsuccess']; ?>",
                        text: "Your file will be deleted !",
                        icon: "success",
                        button: "Cancel"
                        // showCancelButton: true,
                        // confirmButtonColor: "#3085d6",
                        // cancelButtonColor: "#d33",
                        // confirmButtonText: "Yes, delete it!"
                    });
                </script><?php
                            unset($_SESSION['imgsuccess']);
                        } else if (isset($_SESSION['imgfail'])) {
                            ?>
                <script>
                    swal({
                        title: "<?php echo $_SESSION['imgfail']; ?>",
                        text: "Your file will be not deleted",
                        icon: "error",
                        button: "Okay!",
                    });
                </script><?php
                            unset($_SESSION['imgfail']);
                        }
                            ?>


            <!-- login -->
            <?php if (isset($_SESSION['loginsuccess']) && ($_SESSION['loginsuccess'])) { ?>
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

            </body>

            </html>
            