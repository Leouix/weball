<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

/**
 * Executes actions before main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_before_primary_end' ); ?>

</main><!--/.neve-main-->
<footer class="lx-footer">
    <div class="lx-footer-top">
        <div class="footer-logo-element">
            <img src="/web-allianse/wp-content/themes/neve-child/images/wa-footer-logo.png" alt="Реальная удаленная работа">
            <div class="site-info">
                <div class="site-name">Web Alliance</div>
                <div class="site-description">Работай удаленно</div>
            </div>
        </div>
        <div class="footer-menu-contacts">
            <div class="footer-menu">
                <?php wp_nav_menu(); ?>
            </div>
            <div class="footer-contacts">
                <p>Skype: <a href="https://join.skype.com/invite/zs2blwZV7Rjd" target="_blank">Lev Starikov</a></p>
                <p>Zoom: <span>Leo Stann</span></p>
            </div>
        </div>

    </div>
    <div class="lx-footer-bottom">
        <div class="powered-by">Разработано Leouix</div>
        <div class="copyrights">
            <p>Все права защищены 2021 год</p>
            <p>Политика конфиденциальности</p>
        </div>
        <div class="social-services">
            <img src="/web-allianse/wp-content/themes/neve-child/images/vk-icon-i.png" alt="Реальная удаленная работа на дому">
            <img src="/web-allianse/wp-content/themes/neve-child/images/instagram-icon-i.png" alt="Работа на удаленке">
            <img src="/web-allianse/wp-content/themes/neve-child/images/whatsapp-icon-1-i.png" alt="Подработка удаленно">
            <img src="/web-allianse/wp-content/themes/neve-child/images/telegram-icon-i.png" alt="Реальная удаленная работа на дому через интернет">
        </div>
    </div>
</footer>

<img src="/web-allianse/wp-content/themes/neve-child/images/footer.png" alt="" style="display:none">
<?php

/**
 * Executes actions after main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_after_primary' );

/**
 * Filters the content parts.
 *
 * @since 1.0.9
 *
 * @param bool   $status Whether the component should be displayed or not.
 * @param string $context The context name.
 */

?>

</div><!--/.wrapper-->
<?php

wp_footer();

/**
 * Executes actions before the body tag is closed.
 *
 * @since 2.11
 */
do_action( 'neve_body_end_before' );

?>
</body>

</html>
