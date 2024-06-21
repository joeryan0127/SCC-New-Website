<div class="footer">
      <p> © Alrights Reserved 2024
          <br>Developed by: <a href="#">IT FACULTY</a> </p>
    </div>
  </section>

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
    // Function to toggle content visibility
    function toggleContent(contentNum) {
        var contentContainer1 = document.getElementById("content-container1");
        var contentContainer2 = document.getElementById("content-container2");
        var contentContainer3 = document.getElementById("content-container3");
        var contentContainer4 = document.getElementById("content-container4");
        var contentContainer5 = document.getElementById("content-container5");

        // Toggle visibility based on content number
        if (contentNum === 1) {
            contentContainer1.style.display = "block";
            contentContainer2.style.display = "none";
            contentContainer3.style.display = "none";
            contentContainer4.style.display = "none";
            contentContainer5.style.display = "none";
        } else if (contentNum === 2) {
            contentContainer1.style.display = "none";
            contentContainer2.style.display = "block";
            contentContainer3.style.display = "none";
            contentContainer4.style.display = "none";
            contentContainer5.style.display = "none";
        } else if (contentNum === 3) {
            contentContainer1.style.display = "none";
            contentContainer2.style.display = "none";
            contentContainer3.style.display = "block";
            contentContainer4.style.display = "none";
            contentContainer5.style.display = "none";
        }else if (contentNum === 4) {
            contentContainer1.style.display = "none";
            contentContainer2.style.display = "none";
            contentContainer3.style.display = "none";
            contentContainer4.style.display = "block";
            contentContainer5.style.display = "none";
        }else if (contentNum === 5) {
            contentContainer1.style.display = "none";
            contentContainer2.style.display = "none";
            contentContainer3.style.display = "none";
            contentContainer4.style.display = "none";
            contentContainer5.style.display = "block";
        }
    }
</script>

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
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
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

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>