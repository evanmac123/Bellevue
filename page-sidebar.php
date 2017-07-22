<?php
/**
	* Template Name: Sidebar
	*
	* This is the template for the Sidbar
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1> <?php the_title(); ?></h1>
			<div class="col-md-8"><?php 	the_content(); ?></div>

			<?php endwhile; // end of the loop. ?>
			<div id="secondary" class="contact__sidebar col-md-4">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

						<aside id="search" class="widget widget_search">
							<?php get_search_form(); ?>
						</aside>

						<aside id="archives" class="widget">
							<h3 class="widget-title"><?php esc_html_e( 'Archives', 'sparkling' ); ?></h3>
							<ul>
								<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
							</ul>
						</aside>

						<aside id="meta" class="widget">
							<h3 class="widget-title"><?php esc_html_e( 'Meta', 'sparkling' ); ?></h3>
							<ul>
								<?php wp_register(); ?>
								<li><?php wp_loginout(); ?></li>
								<?php wp_meta(); ?>
							</ul>
						</aside>

					<?php endif; // end sidebar widget area ?>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
