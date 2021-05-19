<!-- Footer -->
<footer class="text-center pt-2 text-lg-start bg-light text-muted">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <?php if ($page['footer_first_column']): ?>
          <div id="sidebar-second" class="column sidebar">
            <div class="section">
              <?php print render($page['footer_first_column']); ?>
            </div>
          </div> <!-- /.section, /#sidebar-second -->
          <?php endif; ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <?php if ($page['footer_second_column']): ?>
          <div id="sidebar-second" class="column sidebar">
            <div class="section">
              <?php print render($page['footer_second_column']); ?>
            </div>
          </div> <!-- /.section, /#sidebar-second -->
          <?php endif; ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <?php if ($page['footer_third_column']): ?>
          <div id="sidebar-second" class="column sidebar">
            <div class="section">
              <?php print render($page['footer_third_column']); ?>
            </div>
          </div> <!-- /.section, /#sidebar-second -->
          <?php endif; ?>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <?php if ($page['footer_fourth_column']): ?>
          <div id="sidebar-second" class="column sidebar">
            <div class="section">
              <?php print render($page['footer_fourth_column']); ?>
            </div>

          </div> <!-- /.section, /#sidebar-second -->
          <?php endif; ?>

        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Copyright &copy;
    <!-- This script automatically adds the current year to your website footer-->
    <!-- (credit: https://updateyourfooter.com/)-->
    <script>
      document.write(new Date().getFullYear());

    </script>
    - Company Name
  </div>
  <!-- Copyright -->
</footer>
