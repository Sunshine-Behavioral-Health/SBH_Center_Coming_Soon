<?php

/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');

// Use grid layout if blog index is displayed.
if (is_home()) {
	sbh_center()->print_styles('sbh_center-front-page');
}
?>

<script type="text/javascript">
	// jQuery(document).ready(function($) {
	// 	var sliders = document.querySelectorAll('.glide');

	// 	for (var i = 0; i < sliders.length; i++) {
	// 		var glide = new Glide(sliders[i], {
	// 			gap: 15,
	// 			perView: 1,
	// 			autoplay: 2500,
	// 			hoverpause: true,
	// 			keyboard: true,
	// 		});

	// 		glide.mount();
	// 	}
	// });
</script>

<main id="primary" class="front_page">
	<!-- HERO -->
	<div class="hero_container row">
		<img class="hide_on_mobile hide_on_tablet front_page_desktop_hero " src="<?php echo get_field('hero_image')['url'] ?>" alt="">
		<img class="hide_on_desktop show_on_tablet front_page_mobile_hero" src="<?php echo get_field('hero_mobile_image')['url'] ?>" alt="">

		<div class="front_page_hero_content_wrapper">
			<div class="hero_headline">
				<h1><?php echo get_field('hero_headline') ?></h1>
			</div>
		</div>
	</div>

	<?php get_template_part('template-parts/content/homeCovidNotice'); ?>

	<!-- Inpatient Treatment -->
	<section>
		<div class="treatment_programs_container row">
			<h2 class="col-12"><?php echo get_field('inpatient_treatment_headline') ?></h2>
			<div class="treatment_program_container row">

				<?php
				if (have_rows('inpatient_treatment_programs')) :
					while (have_rows('inpatient_treatment_programs')) : the_row();
				?>
						<div class="col-md-6 col-lg-3 inpatient_treatment_card">
							<div class="icon_container"><img class="icon" src="<?php echo get_sub_field('icon')['url'] ?>"></div>
							<h3><?php the_sub_field('title') ?></h3>
							<p><?php the_sub_field('content') ?></p>
						</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>

	<!-- Healing Interjection -->
	<section>
		<div class="healing_background">
			<h2 class="section_headline healing_headline"><?php echo get_field('interjection_cta_one_headline') ?></h2>
			<?php
			$interjectionCTAOne = get_field('interjection_cta_button')
			?>
			<div class="cta_btn secondary_color_cta interjection_cta">
				<a href="/about-us">
					Coming Soon!
				</a>
			</div>
		</div>
	</section>

	<!-- Treatment Cards -->
	<section>
		<div class="treatment_cards_container row ">
			<h2 class="col-12"><?php echo get_field('inpatient_card_headline') ?></h2>
			<div class="treatment_card_container row">

				<?php
				if (have_rows('inpatient_cards')) :
					while (have_rows('inpatient_cards')) : the_row();
				?>
						<div class="treatment_card_box">
							<a href="<?php echo get_sub_field('card_links')['url'] ?>">
								<div class="icon_container"><img loading="lazy" class="icon" src="<?php echo get_sub_field('icon')['url'] ?>" alt=""></div>
								<h3><?php echo get_sub_field('headline') ?></h3>
							</a>
							<p>______</p>
							<p class="treatment_card_paragraph"><?php echo get_sub_field('card_content') ?></p>
							<div class="row treatment_card_cta_wrapper"><a href="<?php echo get_sub_field('card_links')['url'] ?>">Learn More</a></div>
						</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>

	<!-- Substance Information -->
	<section>
		<div class="substance_bg" style="background-image: url(<?php echo get_field('substance_abuse_background_image')['url'] ?>)">
			<h2 class="substance_headline"><?php echo get_field('substance_abuse_information_headline'); ?></h2>
			<div class=" row substance_info_width">
				<?php
				if (have_rows('substance_abuse_cards')) :
					while (have_rows('substance_abuse_cards')) : the_row();
				?>
						<div class="substance_individual_card">
							<div class="substance_abuse_top">
								<div class="icon_container">
									<img loading="lazy" class="icon " src="<?php echo get_sub_field('icon')['url'] ?>">
								</div>
								<h3><?php echo get_sub_field('headline') ?></h3>
								<p class="substance_headline_underline">______</p>
							</div>
							<p><?php echo get_sub_field('content') ?></p>
						</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer('home');
