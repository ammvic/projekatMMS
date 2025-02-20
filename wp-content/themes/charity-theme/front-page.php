<?php get_header(); ?>

<!-- HERO TOP SEKCIJA - ČISTA SLIKA -->
<section class="hero-top">
    <div class="container">
        <h1>POTREBNA NAM JE VAŠA PODRŠKA DA<br>OBEZBEDIMO SMEŠTAJ, HRANU I OBRAZOVANJE</h1>
        <p>Pomozite nam da pružimo sigurnost, obrazovanje i bolju budućnost onima kojima je to najpotrebnije.</p>
        <a href="<?php echo site_url('/index.php/donacije/'); ?>" class="hero-donate">Donirajte odmah</a>
    </div>
</section>

<!-- HERO BOTTOM SEKCIJA - SLIKA SA OVERLAY-OM I 4 BOX-A -->
<section class="hero-bottom">
    <div class="hero-overlay"></div>
    <div class="container hero-boxes">
        <div class="feature-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-icon1.png" alt="Pomozite devojčicama">
            <h3>Pomozite devojčicama</h3>
            <p>Podržite obrazovanje i zaštitu devojčica širom sveta.</p>
            <a href="<?php echo site_url('/index.php/donacije/'); ?>">Donirajte sada!</a>
        </div>
        <div class="feature-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-icon2.png" alt="Pomozite siročadi">
            <h3>Pomozite siročadi</h3>
            <p>Omogućite ljubav, brigu i sigurnost deci bez roditelja.</p>
            <a href="<?php echo site_url('/index.php/donacije/'); ?>">Donirajte sada!</a>
        </div>
        <div class="feature-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-icon3.png" alt="Podržite obrazovanje">
            <h3>Podržite obrazovanje</h3>
            <p>Omogućite deci pristup kvalitetnom obrazovanju i boljoj budućnosti.</p>
            <a href="<?php echo site_url('/index.php/donacije/'); ?>">Donirajte sada!</a>
        </div>
        <div class="feature-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-icon4.png" alt="Donirajte hranu">
            <h3>Donirajte hranu</h3>
            <p>Pružite osnovne životne namirnice onima kojima su najpotrebnije.</p>
            <a href="<?php echo site_url('/index.php/donacije/'); ?>">Donirajte sada!</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
