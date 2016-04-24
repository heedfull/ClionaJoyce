<?php
/**
 * Template Name: Home Page
 * @package ClionaJoyce
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<?php
		$images = get_field('image_gallery');

		if( $images ) : ?>
		<div class="main-gallery">
			<?php foreach( $images as $image ): ?>
				<img class="gallery-cell" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt'];?>" />
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
