<?php

/**
 * Template part for displaying the header navigation menu
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>

<nav id="site-navigation" class="main-navigation nav--toggle-sub sticky_nav">
	<div class="nav_top_container">
		<div class="nav_top_wrapper">
			<div class="site_logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_field('navigation_logo', 'option')['url']; ?>" alt="">
				</a>
			</div>

			<div class="search_bar_container hide_on_desktop">
				<div class="coming_soon_nav_container">
					<h3>Coming Soon - Fall 2021</h3>
					<p><?php echo get_field('site_name', 'option') ?> is a <a href="https://sunshinebehavioralhealth.com/">Sunshine Behavioral Health </a>location</p>
				</div>
			</div>
			<div class="nav_notice_and_cta_wrapper hide_on_mobile">
				<div class="coming_soon_nav_container">
					<h3>Coming Soon - Fall 2021</h3>
					<p><?php echo get_field('site_name', 'option') ?> is a <a href="https://sunshinebehavioralhealth.com/">Sunshine Behavioral Health </a>location</p>
				</div>
			</div>
		</div>
	</div>
	<div class="nav_bottom_container">
		<div class="navigation_wrapper">
			<div class="nav_width_constrict_wrapper">
				<?php sbh_center()->display_primary_nav_menu(['menu_id' => 'primary-menu']); ?>
			</div>
		</div>
	</div>
</nav>