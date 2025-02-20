<?php
/*
Template Name: Support Page
*/
get_header();
?>

<style>
/***** Animacije *****/
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}

/***** HERO sekcija *****/
.support-hero {
    padding: 80px 0;
    background: linear-gradient(135deg, #f5f7fa, #cfd9df); /* Suptilna gradijent pozadina */
    animation: fadeIn 1s ease-out;
}
.hero-container {
    margin-top: 20px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
}

/***** HERO slike *****/
.hero-images {
    position: relative;
    width: 400px;
    height: 300px;
    animation: fadeIn 1.2s ease-out;
}
.hero-images img {
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    transition: transform 0.3s ease;
}
.hero-images img:hover {
    transform: scale(1.02);
    animation: pulse 0.6s infinite;
}
.hero-images img:first-child {
    position: absolute;
    top: 0;
    left: 0;
    width: 600px;
}
.hero-images img:last-child {
    position: absolute;
    top: 180px;
    left: 220px;
    width: 420px;
}

/***** Tekstualni deo HERO sekcije *****/
.hero-content {
    flex: 1;
    max-width: 500px;
    animation: fadeIn 1.4s ease-out;
}
.hero-content h2 {
    font-size: 2.2rem;
    margin: 15px 0;
    color: #2c3e50;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}
.hero-content p {
    margin-bottom: 25px;
    line-height: 1.6;
    color: #34495e;
}
.donate-btn {
    display: inline-block;
    background: linear-gradient(45deg, #e74c3c, #c0392b);
    color: #fff;
    padding: 12px 30px;
    border-radius: 30px;
    text-transform: uppercase;
    font-weight: bold;
    margin-bottom: 20px;
    text-decoration: none;
    transition: background 0.3s ease, transform 0.3s ease;
}
.donate-btn:hover {
    transform: translateY(-3px) scale(1.05);
    background: linear-gradient(45deg, #c0392b, #e74c3c);
}

/***** Ikonice (Donacije, Prikupljena sredstva, Volonteri) *****/
.hero-stats {
    display: flex;
    gap: 40px;
    margin-top: 25px;
    justify-content: flex-start;
}
.stat-box {
    text-align: center;
    animation: fadeIn 1.6s ease-out;
}
.stat-box i {
    font-size: 28px;
    color: #e67e22;
    margin-bottom: 8px;
    transition: transform 0.3s ease;
}
.stat-box i:hover {
    transform: scale(1.2);
}
.stat-box h3 {
    font-size: 1rem;
    font-weight: 500;
    color: #2c3e50;
}

/***** LATEST CAUSES sekcija *****/
.latest-causes {
    padding: 60px 0;
    background: #fff;
    text-align: center;
    animation: fadeIn 1.8s ease-out;
}
.section-title h3 {
    font-size: 2rem;
    margin-bottom: 15px;
    color: #2c3e50;
}
.section-title p {
    color: #777;
    margin-bottom: 40px;
}
.causes-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}
.cause-card {
    background: #fff;
    width: 300px;
    border-radius: 8px;
    overflow: hidden;
    text-align: left;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    animation: fadeIn 2s ease-out;
}
.cause-card:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transform: translateY(-5px);
}
.cause-card img {
    width: 100%;
    display: block;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}
.cause-card img:hover {
    transform: scale(1.05);
}
.cause-card h4 {
    font-size: 1.2rem;
    margin: 15px;
    color: #2c3e50;
}
.cause-card p {
    margin: 0 15px 15px;
    color: #34495e;
    font-size: 0.95rem;
}
.cause-funding {
    display: flex;
    justify-content: space-between;
    background: #f8f8f8;
    padding: 10px 15px;
    border-top: 1px solid #eee;
    font-weight: bold;
    font-size: 0.9rem;
    color: #2c3e50;
}

/***** Progress Bar i balončići sa procentom *****/
.progress-bar {
    position: relative;
    background: #e0e0e0;
    height: 15px;
    width: 90%;
    border-radius: 6px;
    margin: 10px 15px;
    overflow: visible;
}
.progress {
    background: linear-gradient(45deg, #e74c3c, #c0392b);
    height: 100%;
    border-radius: 6px;
    position: relative;
    transition: width 0.4s ease;
}
.progress-label {
    position: absolute;
    top: -28px;
    right: 0;
    /* transform: translateX(50%); */
    background: #e74c3c;
    color: #fff;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 0.8rem;
    white-space: nowrap;
    min-width: 40px;
    text-align: center;
}

.progress-label::after {
    content: "";
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    border: 5px solid transparent;
    border-top-color: #e74c3c;
}

/***** Responzivni stil *****/
@media (max-width: 768px) {
    .hero-container {
        flex-direction: column;
        align-items: center;
    }
    .hero-images {
        width: 100%;
        height: auto;
        margin-bottom: 30px;
    }
    .hero-images img:first-child {
        width: 100%;
    }
    .hero-images img:last-child {
        width: 80%;
        top: auto;
        left: auto;
        position: static;
        margin-top: 20px;
    }
    .hero-content {
        max-width: 100%;
        text-align: center;
    }
    .hero-stats {
        justify-content: center;
    }
}
</style>

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
?>
