<?php
/**

 * Template Name: Client
 *
 * This is the template for the Client Page
*
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();?>

				 <h1> <?php the_title(); ?></h1>
				 <p> Our clients include:</p>
				<?php
					$images = get_field('client_gallery');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="col-md-4 col-sm-12" style= "text-align:center;" >
						<img class="client__image" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endforeach; ?>
					<?php endif; ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
