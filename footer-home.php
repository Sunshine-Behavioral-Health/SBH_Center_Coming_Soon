<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>


<footer id="colophon" class="site-footer coming_soon_footer">
    <div class="banner_top_image">
        <div class="home_page_footer_headline_form_container">
            <div class="home_page_footer_headlines_form_wrapper">
                <div class="home_page_footer_headlines">
                    <h4>Beat Your Addiction and Start Your Healing Today</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_container">
        <p>&copy; <?php echo date("Y") ?> <?php echo get_field('site_name', 'option') ?> is a <a href="https://www.sunshinebehavioralhealth.com/">Sunshine Behavioral Health</a> location</p>
        <div class="privacy_links_container">
            <a href="<?php echo get_field('privacy_policy_url', 'option'); ?>">Privacy Policy</a>
            <span>|</span>
            <a href="<?php echo get_field('terms_of_service_link', 'option'); ?>">Terms of Service</a>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>