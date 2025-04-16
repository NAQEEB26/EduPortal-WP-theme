</main>

<footer class="main-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-col about-col">
                    <h3 class="footer-title">About EduPortal</h3>
                    <p><?php echo get_theme_mod('footer_about_text', 'We are the best world Information Technology Company. Providing the highest quality.'); ?>
                    </p>

                </div>

                <div class="footer-col quick-links">
                    <h3 class="footer-title">Quick Links</h3>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class' => 'footer-menu',
                        'container' => false
                    )); ?>
                </div>

                <div class="footer-col contact-col">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul class="contact-info">
                        <li>
                            <?php echo get_theme_mod('footer_address', 'Office No.2, Second Floor Asad Plaza Gamtala Chok Shakargarh'); ?>
                        </li>
                        <li> <?php echo get_theme_mod('footer_phone', '+92 309 1920336'); ?>
                        </li>
                        <li>
                            <?php echo get_theme_mod('footer_email', 'info@eduportal.pk'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>