<section class="contact-us" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div id="map">

          <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
          <div class="row">
            <div class="col-lg-4 offset-lg-1">
              <div class="contact-info">
                <div class="icon">
                  <i class="fa fa-phone"></i>
                </div>
                <h4>Phone</h4>
                <span>9560157573</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-info">
                <div class="icon">
                  <i class="fa fa-phone"></i>
                </div>
                <h4>Mobile</h4>
                <span>8696082232</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <?php
                $q = "SELECT * FROM `hformheadline`";
                $run = mysqli_query($con, $q);
                $form = mysqli_fetch_array($run);
                ?>
                <h6>Contact us</h6>
                <h4><?php echo $form['headline']?>
                <!-- <em>Hello</em> -->
              </h4>
                <p><?php echo $form['paragraph']?></p>
              </div>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Your Message"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-gradient-button"><?php echo $btn3['btnlabel']?></button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
      <div class="col-lg-12">
        <p class="copyright">Copyright © 2023 VanniCoaching. All Rights Reserved.</p>

          <!-- <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p> -->
      </div>
    </div>
  </div>
</section>

</body>

</html>
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script>
  //according to loftblog tut
  $('.nav li:first').addClass('active');

  var showSection = function showSection(section, isAnimate) {
    var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
      $('body, html').animate({
          scrollTop: reqSectionPos
        },
        800);
    } else {
      $('body, html').scrollTop(reqSectionPos);
    }

  };

  var checkSection = function checkSection() {
    $('.section').each(function() {
      var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
      if (topEdge < wScroll && bottomEdge > wScroll) {
        var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
        siblings().removeClass('active');
      }
    });
  };

  $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
    e.preventDefault();
    showSection($(this).attr('href'), true);
  });

  $(window).scroll(function() {
    checkSection();
  });
</script>
<script>
  let items = document.querySelectorAll('.carousel .carousel-item')

  items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
      if (!next) {
        // wrap carousel by using first child
        next = items[0]
      }
      let cloneChild = next.cloneNode(true)
      el.appendChild(cloneChild.children[0])
      next = next.nextElementSibling
    }
  })
</script>