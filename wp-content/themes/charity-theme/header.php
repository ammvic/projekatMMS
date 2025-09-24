<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<style>
   .main-header {
  position: relative !important;
    top: auto !important;
  top: 75px;
  left: 0;
  width: 100%;
  z-index: 100;
  padding: 5px 0; /* Smanjen padding */
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  background: rgba(51, 51, 51, 0.4);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  overflow: hidden;
}




.main-header::before {
    content: "";
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -1; /* ispod sadržaja .main-header */

    /* Umetni suptilnu šaru (noise) pomoću Base64, 
       da ne moraš da imaš poseban fajl. */
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAz0lEQVR42mNkYGBg+Pz8/j8GL0AT4P///18hzH4f/Eg3x/h/8SDfH+H/xIN8f4f/Eg3x/h/8SDfH+H/xIN8f4f/Eg3x/h/8SDfH+H/xIN8f4f/Eg3x/h/8SBOs2Aga14vzVAdDWFAusg9ic8fE/4WCB1QgxapIG0V2A53VEzKQcCq9gtAcBjGGwsD0CABt3Jg9Y5DAnAAAAAElFTkSuQmCC") repeat;

    /* Smanji ili pojačaj vidljivost */
    opacity: 0.3;

    /* Sada je zamagljuj, pa dobijaš "magličastu" pozadinu */
    filter: blur(8px);
}
</style>

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
