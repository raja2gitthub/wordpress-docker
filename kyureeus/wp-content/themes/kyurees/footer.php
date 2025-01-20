 <!-- FOOTER -->
  <footer class="bg-black">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-2 col-sm-6 col-xs-6">
          <ul>
            <li><a href="<?php echo get_permalink('584'); ?>">About Us</a> </li>
            <li><a href="<?php echo get_permalink('87'); ?>">Contact Us</a> </li>
            <li><a href="<?php echo get_permalink('390'); ?>">Blogs</a> </li>
          </ul>
        </div>
        <div class="col-6 col-md-2 col-sm-6 col-xs-6">
          <ul>
            <li><a href="<?php echo get_permalink('369'); ?>">Help and Support</a> </li>
            <li><a href="<?php echo get_permalink('376'); ?>">Terms</a> </li>
            <li><a href="<?php echo get_permalink('3'); ?>">Privacy Policy</a> </li>
          </ul>
        </div>
       <!-- <div class="col-md-8 col-sm-12 col-xs-6">
          <a href="#" class="btn btn-outline-yellow float-end">English</a>
        </div> -->
      </div>
      <div class="row footer-bottom">
        <div class="col-md-12">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/logo.png") ?>" class="" width="220">
          </a>
          <a href="" class="copyright">
            © <?php echo date('Y'); ?> Kyureeus
          </a>
        </div>
      </div>
    </div>
  </footer>
</main>
<?php wp_footer(); ?>
<script src="<?php echo esc_url(get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {

  
  $("#test_1").click(function() {
    var video = $("#test_1")[0];
    if (video.paused) {
      video.play();
      $("#img_1").hide();
      $("#img_2").show();
      $("#img_3").show();
      $("#test_2")[0].pause();
      $("#test_3")[0].pause();
      $(".playpause").fadeIn();
    } else {
      video.pause();
      $("#img_1").show();
    }
  });

 $("#test_2").click(function() {
    var video = $("#test_2")[0];
    if (video.paused) {
      video.play();
      $("#img_2").hide();
      $("#img_1").show();
      $("#img_3").show();
      $("#test_1")[0].pause();
      $("#test_3")[0].pause();
      $(".playpause").fadeIn();
    } else {
      video.pause();
      $("#img_2").show();
    }
  });

  $("#test_3").click(function() {
    var video = $("#test_3")[0];
    if (video.paused) {
      video.play();
      $("#img_3").hide();
      $("#img_1").show();
      $("#img_2").show();
      $("#test_1")[0].pause();
      $("#test_2")[0].pause();
      $(".playpause").fadeIn();
    } else {
      video.pause();
      $("#img_3").show();
    }
  });

  $("#testav_1").click(function() {
    var video = $("#test_1")[0];
    if (video.paused) {
      video.play();
      $("#img_1").hide();
      $("#img_2").show();
      $("#img_3").show();
      $("#test_2")[0].pause();
      $("#test_3")[0].pause();
      $(".playpause").fadeIn();
    } else {
      video.pause();
      $("#img_1").show();
    }
  });

  $("#testav_2").click(function() {
    var video = $("#test_2")[0];
    if (video.paused) {
      video.play();
      $("#img_2").hide();
      $("#img_1").show();
      $("#img_3").show();
      $("#test_1")[0].pause();
      $("#test_3")[0].pause();
      $(".playpause").fadeIn();
    } else {
      video.pause();
      $("#img_2").show();
    }
  });

  $("#testav_3").click(function() {
    var video = $("#test_3")[0];
    if (video.paused) {
      video.play();
      $("#img_3").hide();
      $("#img_1").show();
      $("#img_2").show();
      $("#test_1")[0].pause();
      $("#test_2")[0].pause();
      $(".playpause").fadeIn();
    } else {
      video.pause();
      $("#img_3").show();
    }
  });

  $('.carousel').carousel({
  interval: 2000
})

});

  </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()."/assets/slick/slick.js"); ?>" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    }],
      });
    });
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri()."/assets/js/menu.js"); ?>"></script>
    </body>
</html>
