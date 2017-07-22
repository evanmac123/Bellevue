<?php
/*
Template Name: Case Single
Template Post Type: cases
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			$cases = array('post_type' => 'cases');
						$query = new WP_Query( $cases );
						while ($query->have_posts() ) : $query->the_post();

								get_template_part( 'content', 'Cases' );

						endwhile;
						wp_reset_postdata();
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
