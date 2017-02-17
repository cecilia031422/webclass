<?php
/**
 * Mahal Documentation
 *
 * @package Mahal
 */

function mahal_documentation_page() {
	add_theme_page(__('Mahal Documentation', 'mahal'), __('Theme Documentation', 'mahal'), 'switch_themes', 'mahal-documentation', 'mahal_documentation' );
}
add_action('admin_menu', 'mahal_documentation_page');

function mahal_documentation() {
	$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'about';
?>
	<div class="wrap about-wrap">

		<div class="about-text">
			<h1 class="heading"><?php _e('Mahal Themes WordPress', 'mahal'); ?></h1>
			<p><?php _e('Mahal is free WordPress Themes. One column and fully responsive. Comes with randomized header background.', 'mahal'); ?></p>
			<p><?php _e('Thank you for using Mahal Themes WordPress :)', 'mahal'); ?></p>
			<a class="button button-primary button-hero" href="<?php echo admin_url('customize.php'); ?>" target="_blank"><?php _e('Customize Your Site', 'mahal'); ?></a>
			<a class="button button-secondary button-hero" href="<?php echo home_url(); ?>" target="_blank"><?php _e('Visit Your Site', 'mahal'); ?></a>
		</div>

		<h2 class="nav-tab-wrapper">
			<a href="<?php echo add_query_arg('tab', 'about'); ?>" class="nav-tab <?php echo $active_tab == 'about' ? 'nav-tab-active' : ''; ?>"><?php _e('About', 'mahal'); ?></a>
			<a href="<?php echo add_query_arg('tab', 'features'); ?>" class="nav-tab <?php echo $active_tab == 'features' ? 'nav-tab-active' : ''; ?>"><?php _e('Features', 'mahal'); ?></a>
			<a href="<?php echo add_query_arg('tab', 'faq'); ?>" class="nav-tab <?php echo $active_tab == 'faq' ? 'nav-tab-active' : ''; ?>"><?php _e('Frequently Asked Questions', 'mahal'); ?></a>
		</h2>
			
		<div id="tab_container">
			<?php if($active_tab == 'about') { ?>
				
			<div class="feature-section two-col">
				<h2 class="heading"><?php _e('', 'mahal'); ?></h2>
				<div class="col">
					<img src="<?php echo home_url('wp-content/themes/mahal/screenshot.png'); ?>" />
				</div>
				<div class="col">
					<p><?php printf( __('Mahal is made based on <a href="%1$s" target="_blank">_s</a> (Underscores) theme by Automattic. Mahal is free WordPress Themes. One column and fully responsive. Comes with randomized header background.', 'mahal'), 'https://github.com/Automattic/_s' ); ?></p>
					<p><?php _e('Simple and responsive WordPress theme. It\'s clean and good for you who wants focused on the content. It supports 2 widget areas on the footer.', 'mahal'); ?></p>
					<p><?php printf( __('Please read <a href="%1$s" target="_blank"><strong>readme.txt</strong> file</a> to know about theme component. You can visit <a href="%2$s" target="_blank">theme page</a> on my website.', 'mahal'), home_url('wp-content/themes/mahal/readme.txt'), 'http://www.dhimaskirana.com/mahal-wordpress-themes.html' ); ?></p>
					<p><?php printf( __('You can support this theme on <a href="%1$s" target="_blank">github</a>.', 'mahal'), 'https://github.com/dhmskrn/mahal' ); ?></p>
				</div>
			</div>

			<?php } elseif($active_tab == 'features') { ?>

			<div class="feature-section two-col">
				<div class="col">
					<img src="https://14a81a94f132b2313b67e506ee60042ce4e5b4a6.googledrive.com/host/0BwQnxxVI9iahQlNzUk1MLWl2ZnM/back-to-top.png" />
				</div>
				<div class="col">
					<strong><?php _e( 'Back to Top', 'mahal' ); ?></strong>
					<p><?php _e( 'This theme has a feature to scroll to the top of the page. This feature called <strong>back to top</strong>. Simply use, without the need for configuration.', 'mahal' ); ?></p>
				</div>
			</div>

			<div class="feature-section two-col">
				<div class="col">
					<strong><?php _e( 'RDFa Breadcrumb Navigation', 'mahal' ); ?></strong>
					<p><?php _e( 'RDFa Breadcrumb provide links back to each previous page the user navigated through to get to the current page or - in hierarchical site structures - the parent pages of the current one. This theme has supported it.', 'mahal' ); ?></p>
				</div>
				<div class="col">
					<img src="https://14a81a94f132b2313b67e506ee60042ce4e5b4a6.googledrive.com/host/0BwQnxxVI9iahQlNzUk1MLWl2ZnM/breadcrumb-navigation.png" />
				</div>
			</div>

			<div class="feature-section two-col">
				<div class="col">
					<img src="https://14a81a94f132b2313b67e506ee60042ce4e5b4a6.googledrive.com/host/0BwQnxxVI9iahQlNzUk1MLWl2ZnM/avatar.png" />
				</div>
				<div class="col">
					<strong><?php _e( 'Avatar', 'mahal' ); ?></strong>
					<p><?php _e( 'This theme is unique. This theme has an avatar based your primary email on your website general settings. How to change it? You can check at <strong>Frequently Asked Questions</strong> tab.', 'mahal' ); ?></p>
				</div>
			</div>

			<?php } elseif($active_tab == 'faq') { ?>
			
			<div class="section">
				<h3 class="heading"><?php _e('How to change the avatar?', 'mahal'); ?></h3>
				<p><?php printf( __('The avatar default use gravatar, so you can use a gravatar to change. Simply login on <a href="%1$s" target="_blank">Gravatar</a> site, then update your profile picture by email that you use as the primary email on your website. Or you can change it from the <strong>Customize >> Custom Avatar</strong>.', 'mahal'), 'https://gravatar.com/' ); ?></p>
				<h3 class="heading"><?php _e('What is the size of the header image resolution?', 'mahal'); ?></h3>
				<p><?php printf( __('Header image resolution is <strong>1920 pixels</strong> for width and <strong>600 pixels</strong> for height.', 'mahal') ); ?></p>
			</div>
							
			<?php } ?>
		
		</div><!--end #tab_container-->		
	</div>
				
<?php
}