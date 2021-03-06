<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Mahal
 */

get_header(); ?>

	<div id="primary" class="content-area grid w960">
		<main id="main" class="site-main row" role="main">
			<div class="c12">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php mahal_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>