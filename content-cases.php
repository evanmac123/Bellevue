<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
	<div class="post-inner-content">
		<header class="entry-header page-header">
			<?php bcn_display(); ?>
			<h2 class="case-single__title "> <?php  the_title(); ?></h2>
			<h4 class="case-single__tagline title-line">
				<?php the_field('case_tagline'); ?>
			</h4><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="row">
		<div class=" col-lg-10 entry-content">
			<?php the_content();?>
		</div><!-- .entry-content -->
</article><!-- #post-## -->
