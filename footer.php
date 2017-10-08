<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
  </div>
  <!-- close .row -->
  </div>
  <!-- close .container -->
  <div id="footer-area">
    <div class="footer-inner">
      <div class="row">
        <?php get_sidebar( 'footer' ); ?>
      </div>
    </div>

    <footer class="site-footer" role="contentinfo">
      <div class="site-info">
        <div class="row">
          <?php dynamic_sidebar( 'footer-widget' ); ?>
        </div>
      </div>
      <!-- .site-info -->
      <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
      <!-- .scroll-to-top -->
    </footer>
    <!-- #colophon -->
  </div>
  </div>
  <!-- #page -->

  <?php wp_footer(); ?>
  </div>
  <!-- close .site-content -->



  </body>

  </html>
