<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<style>
/* === RESET === */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* === Top Bar === */
.top-bar {
  background: #1a1a1a;
  color: #eee;
  font-size: 13px;
  padding: 8px 0;
}

.top-bar .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.top-bar .contact-info {
  display: flex;
  gap: 20px;
}

.top-bar .contact-info i {
  margin-right: 6px;
  color: #e63946;
}

.top-bar .top-bar-buttons {
  display: flex;
  align-items: center;
  gap: 10px;
}

..top-bar .top-donate {
  background: linear-gradient(135deg, #e63946, #ff6b6b);
  color: #fff;
  font-weight: 600;
  padding: 8px 20px;
  border-radius: 30px;
  text-decoration: none;
  display: inline-block;
  transition: all 0.3s ease;
  box-shadow: 0 4px 10px rgba(230, 57, 70, 0.4);
}

.top-bar .top-donate:hover {
  background: linear-gradient(135deg, #ff4757, #e63946);
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(230, 57, 70, 0.55);
}


/* === Main Header (transparentan) === */
.main-header {
  top: 0;
  z-index: 998;
  background: rgba(255, 255, 255, 0.1); /* prozirno */
  backdrop-filter: blur(12px); /* zamućenje iza */
  -webkit-backdrop-filter: blur(12px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.25);
  padding: 14px 0;
  transition: background 0.3s ease;
}

.header-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo img {
  max-height: 55px;
  width: auto;
  display: block;
}

/* === Navigation === */
.main-nav .nav-list {
  list-style: none;
  display: flex;
  gap: 30px;
}

.main-nav .nav-list li a {
  text-decoration: none;
  font-weight: 500;
  color: #fff; /* bijela jer je header transparentan */
  transition: color 0.3s ease;
}
.main-nav .nav-list li a:hover {
  color: #e63946;
}
</style>

<!-- Gornja traka (Top Bar) -->
<div class="top-bar">
    <div class="container">
        <div class="contact-info">
            <span><i class="fas fa-phone"></i> 233-455-7995</span>
            <span><i class="fas fa-map-marker-alt"></i> Ulica 233.52, Privremena adresa</span>
        </div>

        <div class="top-bar-buttons">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-heart.png" alt="Pomozite" style="height:18px;">
            <a href="<?php echo site_url('/index.php/donacije/'); ?>" class="top-donate">Donirajte</a>
        </div>
    </div>
</div>

<!-- Glavni header -->
<header class="main-header">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/l1.png" alt="Logo Humanitarne Organizacije">
                </a>
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
