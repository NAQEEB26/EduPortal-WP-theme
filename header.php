<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="main-header">


        <nav class="main-navigation">
            <div class="container">
                <div class="nav-inner">
                    <div class="logo-container">
                        <?php if(has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                        <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                                alt="<?php bloginfo('name'); ?>">
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="menu-container">
                        <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'primary-menu',
                        'container' => false,
                        //'walker' => new Eduportal_Nav_Menu()
                    )); ?>

                        <div class="mobile-menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">