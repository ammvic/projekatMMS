<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Gornja traka (top-bar) -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-content">
            <div class="contact-info">
                <span class="phone"><i class="fas fa-phone"></i> 233-455-7995</span>
                <span class="address"><i class="fas fa-map-marker-alt"></i> Ulica 233.52, Privremena adresa, Donec ultricies mattis nulla</span>
            </div>

            <!-- Widget zona u gornjoj traci -->
            <div class="top-bar-widget">
                <?php if ( is_active_sidebar( 'top-bar-widget' ) ) : ?>
                    <?php dynamic_sidebar( 'top-bar-widget' ); ?>
                <?php endif; ?>
            </div>

            <div class="top-bar-buttons">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-heart.png" alt="Pomozite">
                <a href="<?php echo site_url('/index.php/donacije/'); ?>" class="top-donate">Donirajte</a>
            </div>
        </div>
    </div>
</div>

<!-- Glavni header (logo, meni) -->
<header class="main-header">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/l1.png" 
                     alt="Logo Humanitarne Organizacije" 
                     style="max-height: 60px; width: 70px; display: block;">
            </div>

            <nav class="main-nav">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container'      => false,
                        'menu_class'     => 'nav-list'
                    ));
                ?>
            </nav>
        </div>
    </div>
</header>
