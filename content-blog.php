<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-inner-content">
		<header class="entry-header page-header">
			<?php bcn_display(); ?>
			<h2 class="blog-single__title "> <?php  the_title(); ?></h2>
			<h4 class="blog-single__dateline title-line">
				<?php the_date(); ?>
			</h4><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<?php $image = get_field('blog_image'); ?>
		<div class="blog-single_image">
			<img  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
		<div class="row">
		<div class=" col-lg-10 entry-content">
			<?php the_content();?>
			<div class="row nav-post">
				<div class="next-posts"><?php next_post_link('%link', '<span class="post-title">%title <i class="fa fa-minus"></i></span> ') ?></div>
				<div class="prev-posts"><?php previous_post_link('%link', '<i class="fa fa-minus"></i> <span class="post-title">%title</span>') ?></div>
			</div>

		</div><!-- .entry-content -->
</article><!-- #post-## -->
