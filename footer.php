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
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
        <a href="https://www.germanna.edu" class="mx-sm-auto"><img src="https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/gcc-logo.svg" alt="white germanna logo" height="108" width="147" class="logo"/></a>
        <p class="mx-sm-auto">Powered by Germanna Community College</p>
        </div>
    </div>
   <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="https://www.germanna.edu/about-germanna/privacy-policy/">Privacy</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://www.germanna.edu/statements-policies/">Statements & Policies</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://www.germanna.edu/about-germanna/accreditation/">Accreditation</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Germanna Community College.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

<script>
    $(document).ready(function() {
      $("#requestInfoModal").modal();
    });
</script>

</body>
</html>
