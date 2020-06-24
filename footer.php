<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package college_everywhere
 */

?>
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <a href="https://www.germanna.edu"><img src="https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/gcc-logo.svg" alt="white germanna logo" height="108" width="147" class="logo"/></a>
        <p>Powered by Germanna Community College</p>
        </div>
    </div>
   <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">Privacy</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://www.germanna.edu/statements-policies/">Statements & Policies</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Accreditation</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Germanna Community College.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://www.facebook.com/gccva">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="https://twitter.com/germannacc">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/germanna_cc">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.youtube.com/user/GCCVA">
                <i class="fab fa-youtube fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.flickr.com/photos/germannacommunitycollege">
                <i class="fab fa-flickr fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/school/germanna-community-college">
                <i class="fab fa-linkedin fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<script>
  $(document).ready(function() {
    $("#requestInfoModal").modal();
  });
</script>


<?php wp_footer(); ?>

</body>
</html>
