<?php
/**
 *
 *
 * This is the template for the homepage
 *
 * @package sparkling
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
      <div class="row">
        <h1 class="col-lg-12">  Our Staff</h1>
      </div>
      <div class="row">
      <?php
      $loop = new WP_Query( array( 'post_type' => 'Staff') );
      if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <a href="<?php the_permalink();?>" class="col-md-4 staff">
            <div class="staff__headshot">
              <img class="staff__headshot-img" src="<?php the_field('staff_headshot');?>" />
            </div>
            <div class="staff__id">
            <div class="staff__name"><?php the_field('staff_name');?></div>
            <div class="staff__title"><?php the_field('staff_title');?></div>
          </div>
          </a>
          <?php endwhile;
      endif;
  ?>
    </div>
    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>