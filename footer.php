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
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 h-100 text-center my-auto">
        <a href="https://www.germanna.edu"><img src="https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/gcc-logo.svg" alt="white germanna logo" height="158" width="197" class="logo"/></a>
        <p class="mx-sm-auto">Powered by <a href="https://www.germanna.edu">Germanna Community College</a></p>
        </div>
    </div>
   <div class="row">
        <div class="col-lg-12 h-100 text-center my-auto">
          <ul class="list-inline mb-2">
            <li class="text-sm-center d-lg-inline-block">
              <a href="https://www.germanna.edu/about-germanna/privacy-policy/">Privacy</a>
            </li>
            <li class="text-sm-center d-lg-inline-block">&sdot;</li>
            <li class="text-sm-center d-lg-inline-block">
              <a href="https://www.germanna.edu/statements-policies/">Statements & Policies</a>
            </li>
            <li class="text-sm-center d-lg-inline-block">&sdot;</li>
            <li class="text-sm-center d-lg-inline-block">
              <a href="https://www.germanna.edu/about-germanna/accreditation/">Accreditation</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Germanna Community College.</p>
        </div>
      </div>
    </div>
  </footer>
<!-- Flexbox container for aligning the toasts -->
<div class="toast text-center" data-autohide="false" style="position: fixed; z-index: 10000; right: 0; bottom: 20px; background-color: #fbf065; width: 350px;">
  <div class="toast-header text-center" style="background-color: #fbf065;">
   
    <button type="button" class="ml-auto mb-1 close" data-dismiss="toast" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>

  </div>
  <div class="toast-body text-center" style="background-color: #fbf065">
    <h5 class="text-dark text-center">Get Started</h5>
    <p class="text-dark">Register by August 7. Classes start August 10</p>
  <button class="btn btn-dark float-right d-inline-block" type="button" data-toggle="modal" data-target="#requestInfoModal">Request Information</button>
     <a href="https://calendly.com/ctompkins-2/germanna-community-college-college-everywhere" class="btn btn-dark btn-block mb-2">
    Book an online session
  </a>
 </p>
  </div>

<?php wp_footer(); ?>
<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>
</body>
</html>