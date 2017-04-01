<?php

/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Mahal
 */

get_header(); ?>

	<div id="primary" class="content-area grid w960">
		<main id="main" class="site-main row" role="main">
			<div class="c12">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( '404', 'mahal' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<span><?php _e( '404', 'mahal' ); ?></span>
				</div><!-- .page-content -->

			</section><!-- .error-404 -->

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>