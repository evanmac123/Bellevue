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
        <h1 class="col-lg-12">  Case Studies</h1>
      </div>
      <div class="row">
      <?php
      $loop = new WP_Query( array( 'post_type' => 'Cases') );
      if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <a href="<?php the_permalink();?>" class="col-md-4 cases">
            <div class="case__img" style="background-color:<?php the_field('case_color') ?>;">
              <?php $image = get_field('case_logo');?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <div class="case__id">
            <div class="case__title"><?php the_title();?></div>
          </div>
          </a>
          <?php endwhile;
      endif;
  ?>
    </div>
    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
