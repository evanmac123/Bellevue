<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'cases' );

			the_post_navigation( array(
				'next_text' 		=> '<span class="post-title">%title <i class="fa fa-minus"></i></span>',
     		'prev_text' 		=> '<i class="fa fa-minus"></i> <span class="post-title">%title</span>',
				'in_same_term'  => true,
			) );

		endwhile; // end of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
