<?php
get_template_part('template-parts/javascript/expandableRowsShortcodeJs');

$sitePlusIconUrl;
$uploadDir = wp_upload_dir();
$siteName = get_field('site_name', 'option');

?>


<?php if (get_field('references')) : ?>
    <section class="sources_section">
        <h4>Sources</h4>
        <img class="sources_plus_icon" src="<?php echo get_field('plus_icon', 'option') ?>" alt="">
        <div class="sources_wrapper hide">
            <?php echo get_field('references') ?>
        </div>
    </section>
<?php endif; ?>