<?php
/**
 * Template Name: Home
 *
 * This is the template for the homepage
 *
 * @package sparkling
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <div class="entry-content">
          <div class="col-lg-8">
      		<?php
      			the_content();
      			wp_link_pages( array(
      				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkling' ),
      				'after'  => '</div>',
      			) );
      		?>'
        </div>
          <?php if ( is_active_sidebar( 'home-widget' ) ) : ?>
          <div class="col-lg-4" role="complementary">
            <?php dynamic_sidebar( 'home-widget' ); ?>
          </div><!-- .widget-area .second -->
          <?php endif; ?>
      </div>
      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
