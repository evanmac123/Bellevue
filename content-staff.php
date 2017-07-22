<?php
/**
 * @package sparkling
 */
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
    <div class="post-inner-content staff-single">
      <div class="row staff-breadcrumb">
        <?php bcn_display();
        $image = get_field('staff_photo');
				$headshot = get_field('staff_headshot');
				$position = get_field('staff_title');
				$name = get_field('staff_name');
				$email = get_field('staff_email');
				$phone = get_field('staff_phone_number');
				$linkedin = get_field('staff_linkedin');
				$address = get_field('staff_office_address');
				$description = get_field('staff_description'); ?>
      </div>
      <div class="row">
        <div class="col-md-4">
            <div class="row">
              <div class="staff-single__image col-lg-12">
                <?php if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php else :?>
                <img src="<?php echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>" />
                <?php endif;?>
              </div>
            </div>
        </div>
        <div class="col-md-8  staff-single__text">
          <header class="entry-header  row">
            <h2 class="staff-single__name"><?php echo $name;?></h2>
            <div class="staff-single__title">
              <?php echo $position; ?>
            </div>
            <hr>
            <hr>
          </header>
          <!-- .entry-header -->
          <div class="row">
            <div class="staff-single_description ">
              <?php echo $description; ?>
            </div>
          </div>
        </div>
      </div>
            <div class="row">
              <div class="staff-single-info col-lg-12">
                  CONTACT INFO
                  <hr class="clear">
                  <div class="staff-single__phone contact">
                    <?php echo $phone; ?>
                  </div>
                  <div class="staff-single__email contact">
                    <a href="mailto:<?php echo $email; ?>">
                      <?php echo $email; ?>
                    </a>
                  </div>
                  <div class="staff-single__address contact">
                    <?php echo $address; ?>
                  </div>
                  <div class="staff-single__linkedin contact">
                    <a href="<?php echo $linkedin; ?>" class="fa fa-linkedin"></a>
                  </div>
                </div>
              </div>

      <div class="entry-content">
        <?php the_content(); ?>
        <div class="row nav-post">
          <div class="next-posts"><?php next_post_link('%link', '<span class="post-title">%title <i class="fa fa-minus"></i></span> ') ?></div>
          <div class="prev-posts"><?php previous_post_link('%link', '<i class="fa fa-minus"></i> <span class="post-title">%title</span>') ?></div>
        </div>
      </div>
      <!-- .entry-content -->
    </div>

  </article>
  <!-- #post-## -->
