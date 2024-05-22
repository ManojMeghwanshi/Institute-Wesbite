<?php
include "header.php";
include "../startbootstrap-sb-admin-2-gh-pages/conn.php";
include "hheadlinedatafetch.php";
include "../startbootstrap-sb-admin-2-gh-pages/hdata/himgdatafetch/himgfetch.php";
include "../startbootstrap-sb-admin-2-gh-pages/hdata/hbtndatafetch/hbtnfetch.php";
?>
<!-- ***** Main Banner Area Start ***** -->
<section class="main-banner" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="header-text">
          <h6><?php echo $row['paragraph'] ?></h6>
          <h2><?php echo $row['Content'] ?><em><?php echo $row['Content 2'] ?></em></h2>
          <div class="main-button-gradient">
            <div class="scroll-to-section"><a href="page.php"><?php echo $btn1['btnlabel']?></a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-image">
          <img src="../startbootstrap-sb-admin-2-gh-pages/hdata/image/<?php echo $img['img'] ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <!-- <h6>Our Courses</h6> -->
          <h4 style="font-size: 3rem;" class="mb-4"><?php echo $row1['headline'] ?> <em><?php echo $row1['Colorheadline'] ?></em></h4>
        </div>
      </div>
      <div class="container text-center my-3">
        <!-- <h2 class="font-weight-light">Bootstrap Multi Slide Carousel</h2> -->
        <div class="row mx-auto my-auto justify-content-center">
          <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-img">
                      <img src="assets/images/Frontend developer (1).png" class="img-fluid">
                    </div>
                    <!-- <div class="card-img-overlay">Slide 1</div> -->
                  </div>
                </div>
              </div>
              <?php while ($img2 = mysqli_fetch_array($a4)) { ?>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="../startbootstrap-sb-admin-2-gh-pages/hdata/hslidercardimage/<?php echo $img2['image'] ?>" class="img-fluid">
                      </div>
                      <!-- <div class="card-img-overlay">Slide 6</div> -->
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
        </div>
        <!-- <h5 class="mt-2 fw-light">advances one slide at a time</h5> -->
      </div>
    </div>
  </div>
</section>

<section class="simple-cta">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <div class="left-image">
          <img src="../startbootstrap-sb-admin-2-gh-pages/hdata/bannerimgfolder/<?php echo $bimg['image']; ?>" alt="" style="border-bottom-left-radius: 10px; margin: left 500px; ">
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <!-- <h6>An Interactive Learning Adventure Awaits!</h6> -->
        <h4><?php echo $row2['title'] ?></h4>
        <p><?php echo $row2['para'] ?></p>
        <div class="white-button">
          <a href="page.php"><?php echo $btn2['btnlabel']?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container mt-4 p-4">
  <div class="card-deck row">
    <div class="card col">
      <img class="card-img-top" src="../startbootstrap-sb-admin-2-gh-pages/hdata/hmissionimg/<?php echo $mimg['img'] ?>" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title text-center text-bold" style="font-weight: bold;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><?php echo $row3['headline'] ?></h2>
        <p class="card-text font-weight-normal text-center item" style="font-size: medium;"><?php echo $row3['paragraph'] ?> </p>
      </div>
      <!-- <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div> -->
    </div>
    <div class="card col">
      <img class="card-img-top" src="../startbootstrap-sb-admin-2-gh-pages/hdata/hvisionimg/<?php echo $vimg['img'] ?>" alt="Card image cap">
      <div class="card-body">
        <div class="">
          <h2 class="card-title text-center" style="font-weight: bold;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;"><?php echo $row4['headline'] ?></h2>
        </div>
        <p class="card-text font-weight-normal text-center item" style="font-size: medium;"><?php echo $row4['paragraph'] ?></p>
      </div>
      <!-- <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div> -->
    </div>
  </div>
</div>

<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h6>Testimonials</h6>
          <h4>What They <em>Think</em></h4>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
          <div class="item">
            <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
            <h4>Olivia Too</h4>
            <span>Creative Designer</span>
            <img src="assets/images/Untitled design (9).png" alt="" style="border-radius: 50rem;">
          </div>
          <div class="item">
            <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
            <h4>Olivia Too</h4>
            <span>Creative Designer</span>
            <img src="assets/images/Untitled design (9).png" alt="" style="border-radius: 50rem;">
          </div>
          <div class="item">
            <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
            <h4>Olivia Too</h4>
            <span>Creative Designer</span>
            <img src="assets/images/Untitled design (9).png" alt="" style="border-radius: 50rem;">
          </div>
          <div class="item">
            <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
            <h4>Olivia Too</h4>
            <span>Creative Designer</span>
            <img src="assets/images/Untitled design (9).png" alt="" style="border-radius: 50rem;">
          </div>
          <div class="item">
            <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
            <h4>Olivia Too</h4>
            <span>Creative Designer</span>
            <img src="assets/images/Untitled design (9).png" alt="" style="border-radius: 50rem;">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php
include "footer.php";
?>