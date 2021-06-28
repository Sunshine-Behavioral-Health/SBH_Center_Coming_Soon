<script>
    jQuery(document).ready(function($) {
        // Inserts Nav Icons
        <?php

        // $navIcon1 = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/navbar_icon_about.png';
        // $navIcon2 = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/navbar_icon_star.png';
        // $navIcon3 = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/navbar_icon_addiction.png';
        // $navIcon4 = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/navbar_icon_resources.png';
        // $navIcon5 = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/navbar_icon_insurance.png';

        $navIcon1 = get_field('nav_icon_1', 'option')['url'];
        $navIcon2 = get_field('nav_icon_2', 'option')['url'];
        $navIcon3 = get_field('nav_icon_3', 'option')['url'];
        $navIcon4 = get_field('nav_icon_4', 'option')['url'];
        $navIcon5 = get_field('nav_icon_5', 'option')['url'];

        $setHeight = '';
        ?>

        function addNavIcons() {
            let navIcon1 = '<a href="<?php echo '/about-us' ?>"><img class="nav_icon_1 " src="" alt=""></a>';
            $(".top_level_nav_1").prepend(navIcon1);
            $(".nav_icon_1").attr("src", "<?php echo $navIcon1 ?>");

            let navIcon2 = '<a href="<?php echo '/addiction' ?>"><img class="nav_icon_2 " src="" alt=""></a>';
            $(".top_level_nav_2").prepend(navIcon2);
            $(".nav_icon_2").attr("src", "<?php echo $navIcon2 ?>");

            let navIcon3 = '<img class="nav_icon_3 " src="" alt="">';
            $(".top_level_nav_3").prepend(navIcon3);
            $(".nav_icon_3").attr("src", "<?php echo $navIcon3 ?>");

            let navIcon4 = '<a href="<?php echo '/contact-us' ?>"><img class="nav_icon_4 " src="" alt=""></a>';
            $(".top_level_nav_4").prepend(navIcon4);
            $(".nav_icon_4").attr("src", "<?php echo $navIcon4 ?>");

            let navIcon5 = '<a href="<?php echo '/insurance-verification' ?>"><img class="nav_icon_5 " src="" alt=""></a>';
            $(".top_level_nav_5").prepend(navIcon5);
            $(".nav_icon_5").attr("src", "<?php echo $navIcon5 ?>");
        }
        addNavIcons();

        // Checks p tags and if empty deletes
        $('aside p').each(function() {
            var $this = $(this);
            if ($this.html().replace(/\s|&nbsp;/g, '').length == 0)
                $this.remove();
        });
    });
</script>