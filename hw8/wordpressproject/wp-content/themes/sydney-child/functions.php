<?php
			function my_theme_enqueue_styles() {

				// You could put 
				//		@import url("../twentyfifteen/style.css");
				// into your child-theme css file instead of doing the
				// following, but that's way less efficient

					// eg. 'twentyfifteen-style' for the Twenty Fifteen theme.
				$parent_style = 'parent-style'; 

				wp_enqueue_style( $parent_style,
						get_template_directory_uri() . '/style.css' );

				// If you have a additional child style sheets
				// (other than style.css), add them like this:
				//
				//	wp_enqueue_style( 'child-style',
				//	get_stylesheet_directory_uri() . '/style.css',
				//	array( $parent_style ),
				//	wp_get_theme()->get('Version')
				//  );
			}
			add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

