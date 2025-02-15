<?php
/*
Template Name: Support Page
*/
get_header();
?>

<!-- HERO sekcija (gornji deo) -->
<section class="support-hero">
    <div class="container hero-container">
        
        <!-- Omotač za slike, postavi position: relative -->
        <div class="hero-images">
            <!-- Prva (manja) slika -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/slider3.jpg" alt="Pomoć ljudima">
            <!-- Druga (veća) slika -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/slider2.jpg" alt="Pomoć ljudima">
        </div>
        
        <!-- Tekstualni deo pored slika -->
        <div class="hero-content">
            <h2>Potrebna nam je vaša podrška za pomoć ugroženima</h2>
            <p>Ovim projektom želimo da obezbedimo hranu, smeštaj i obrazovanje onima kojima je to najpotrebnije. 
               Uz vašu pomoć možemo promeniti mnoge živote i stvoriti bolju budućnost za sve.</p>
            <a href="#" class="donate-btn">Donirajte odmah</a>
            
            <div class="hero-stats">
                <div class="stat-box">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Donacije</h3>
                </div>
                <div class="stat-box">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h3>Prikupljena sredstva</h3>
                </div>
                <div class="stat-box">
                    <i class="fas fa-users"></i>
                    <h3>Volonteri</h3>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- LATEST CAUSES sekcija (donji deo) -->
<section class="latest-causes">
    <div class="container">
        <div class="section-title">
            <h3>Najnovije akcije</h3>
            <p>Pronađite popularnu akciju i podržite je</p>
        </div>
        <div class="causes-wrapper">
            
            <!-- Kartica 1 -->
            <div class="cause-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images (1).jpeg" alt="Akcija 1">
                <h4>Dugogodišnje iskustvo u pomoći najugroženijima</h4>
                <p>Vaša podrška obezbeđuje hranu, obrazovanje i nadu za bolje sutra.</p>
                <div class="cause-funding">
                    <span>$2000 prikupljeno</span>
                    <span>$2500 cilj</span>
                </div>
                <!-- PROGRESS BAR: 2000/2500 = 80% -->
                <div class="progress-bar">
                    <div class="progress" style="width: 80%;">
                        <div class="progress-label">80%</div>
                    </div>
                </div>
            </div>
            
            <!-- Kartica 2 -->
            <div class="cause-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images (2).jpeg" alt="Akcija 2">
                <h4>Mali koraci dovode do velikih promena</h4>
                <p>Samo nekoliko donacija može obezbediti dovoljno sredstava za kritične potrebe.</p>
                <div class="cause-funding">
                    <span>$1300 prikupljeno</span>
                    <span>$2000 cilj</span>
                </div>
                <!-- PROGRESS BAR: 1300/2000 = 65% -->
                <div class="progress-bar">
                    <div class="progress" style="width: 65%;">
                        <div class="progress-label">65%</div>
                    </div>
                </div>
            </div>
            
            <!-- Kartica 3 -->
            <div class="cause-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/9235.png" alt="Akcija 3">
                <h4>Udružimo se za bolje uslove života</h4>
                <p>Naša misija je da pomognemo najugroženijima kroz hranu, smeštaj i obrazovanje.</p>
                <div class="cause-funding">
                    <span>$600 prikupljeno</span>
                    <span>$800 cilj</span>
                </div>
                <!-- PROGRESS BAR: 600/800 = 75% -->
                <div class="progress-bar">
                    <div class="progress" style="width: 75%;">
                        <div class="progress-label">75%</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



<?php
get_footer();
