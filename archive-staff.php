<?php
/**
 *
 *
 * This is the template for the staff archive
 *
 * @package sparkling
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
      <div class="row">
        <h1 class="col-lg-12"> Our Team</h1>
        <div class="col-lg-8">
          <p>At Bellevue, we have experienced professionals who have worked at the center of the region’s press, as spokespersons, news reporters, strategists and advisors for public officials.
          </p>
          <p> We understand the way the press works, and we use that knowledge to create a customized communications strategy for the client, delivering it in a way that influences an outcome for the client’s benefit.
          </p>
        </div>
      </div>
      <br>
      <div class="row">
        <?php
      $loop = new WP_Query( array( 'post_type' => 'Staff') );
      if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <a href="<?php the_permalink();?>" class="col-md-4 staff">
            <div class="staff__headshot">
              <img src="<?php
              $headshot = get_field('staff_headshot');
               echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>" />
            </div>
            <div class="staff__id">
              <div class="staff__name">
                <?php the_field('staff_name');?>
              </div>
              <div class="staff__title">
                <?php the_field('staff_title');?>
              </div>
            </div>
          </a>
          <?php
          endwhile;
      endif;
  ?>
      </div>
    </main>
    <!-- #main -->

  </div>
  <!-- #primary -->

  <?php get_footer(); ?>
