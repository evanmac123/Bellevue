<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			Hello
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */?>
				 <a href="<?php the_permalink();?>" class="col-md-4 blog_list-item">
					 <div class="blog__img">
					 <?php $image = get_field('blog_image');?>
					 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					 <div class="blog__title"><?php the_title();?></div>
				 </div>
				 </a>
				 <?php
			endwhile;

			the_posts_pagination( array(
	        'prev_text' => '<i class="fa fa-minus"></i> ' . __( 'Newer posts', 'sparkling' ),
	        'next_text' => __( 'Older posts', 'sparkling' ) . ' <i class="fa fa-minus"></i>' ,
	    ) );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
