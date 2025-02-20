<?php
/*
Template Name: Events Page
*/
get_header();
?>

<!-- Učitavanje Font Awesome (ikone) -->
<link 
  rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" 
  integrity="sha512-..." 
  crossorigin="anonymous" 
  referrerpolicy="no-referrer"
/>

<style>
/* RESET */
* {
  margin: 0; 
  padding: 0; 
  box-sizing: border-box;
}
img {
  display: block;
  max-width: 100%;
  height: auto;
}

/* ANIMACIJE */
@keyframes bounceIcon {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-8px); }
  60% { transform: translateY(-4px); }
}

/* GLAVNI KONTEJNER */
.page-events {
  font-family: Arial, sans-serif;
}

/* ------------------------------------------------------ */
/* 1. HERO DEO (slika bez narandžastog overlay-a)         */
/* ------------------------------------------------------ */
.hero-wrapper {
  position: relative;
  width: 100%;
  min-height: 80vh;
  background: url('<?php echo get_template_directory_uri(); ?>/assets/img/lana-deca.jpg') 
              no-repeat center center / cover;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  color: #fff;
  padding: 60px 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.hero-overlay {
  /* isključeno overlay, jer ne želimo narandžastu boju */
  display: none; 
}
.hero-container {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1200px;
  display: grid;
  grid-template-columns: 1fr 1fr; 
  gap: 30px;
}

/* LEVA KOLONA (Naslov, tekst) */
.hero-left {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.hero-left .subtitle {
  font-size: 1.1rem;
  text-transform: uppercase;
  color: #ffc107;
  margin-bottom: 10px;
  letter-spacing: 1px;
  text-shadow: 0 1px 2px rgba(0,0,0,0.3);
}
.hero-left h1 {
  font-size: 3rem;
  line-height: 1.2;
  margin-bottom: 20px;
  text-shadow: 0 2px 5px rgba(0,0,0,0.4);
}
.hero-left p {
  font-size: 1.2rem;
  margin-bottom: 20px;
  max-width: 500px;
  opacity: 0.95;
}

/* DESNA KOLONA (3 kartice događaja) */
.hero-right {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 20px;
}

/* EVENT KARTICE */
.event-card {
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.2);
  backdrop-filter: blur(6px);
  padding: 20px;
  border-radius: 8px;
  color: #fff;
  display: flex;
  gap: 15px;
  position: relative;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.event-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}
.event-image {
  width: 80px;
  height: 80px;
  overflow: hidden;
  border-radius: 6px;
  flex-shrink: 0;
  background: #ccc;
}
.event-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.event-content {
  flex: 1; 
}
.event-date {
  font-size: 0.9rem;
  color: #ffca28;
  margin-bottom: 8px;
}
.event-title {
  font-size: 1.1rem;
  font-weight: bold;
  margin-bottom: 6px;
}
.event-meta {
  font-size: 0.85rem;
  opacity: 0.8;
  margin-top: 6px;
}

/* ------------------------------------------------------ */
/* 2. STEP KARTICE (SPOJENE LINIJOM, sa animacijom ikonica) */
/* ------------------------------------------------------ */
.steps-section {
  position: relative;
  max-width: 1000px;
  margin: 60px auto;
  padding: 0 20px;
}

.steps-line {
  position: absolute;
  top: 70px;
  left: 10%;
  right: 10%;
  height: 2px;
  background: linear-gradient(to right, #e74c3c, #ffc107);
  z-index: 1;
}

.steps-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  position: relative;
  z-index: 2;
  flex-wrap: wrap;
  gap: 20px;
}

.step-box {
  background: #fff;
  width: 280px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
  padding: 60px 20px 20px;
  position: relative;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.step-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.step-icon-wrapper {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  background: linear-gradient(145deg, #e74c3c, #ffc107);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease;
}

.step-icon-wrapper:hover {
  animation: bounceIcon 1s;
  transform: translate(-50%, -50%) scale(1.1);
}

.step-icon-wrapper i {
  font-size: 1.8rem;
  color: #fff;
}

.step-box h4 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #333;
  margin-top: 40px;
  font-weight: bold;
}

.step-box p {
  font-size: 1rem;
  color: #666;
  line-height: 1.4;
}


/* ------------------------------------------------------ */
/* RESPONSIVE PRILAGODBE                                  */
/* ------------------------------------------------------ */
@media (max-width: 992px) {
  .hero-container {
    grid-template-columns: 1fr;
  }
  .event-card {
    flex-direction: column; 
    align-items: center;
  }
  .event-image {
    width: 100px;
    height: 100px;
  }
  .steps-section {
    margin-top: 40px;
  }
  .steps-line {
    display: none;
  }
  .steps-wrapper {
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }
  .step-box {
    width: 100%;
    max-width: 300px;
    margin-bottom: 20px;
  }
}
</style>

<div class="page-events">
  
  <!-- 1. HERO DEO (samo slika u pozadini) -->
  <section class="hero-wrapper">
    <div class="hero-overlay"></div>
    
    <div class="hero-container">
      <!-- Leva kolona: veći događaj ili statični tekst -->
      <div class="hero-left">
        <span class="subtitle">Predstojeći događaji</span>
        <h1>Obrazovanje<br>Menja Život Siromašne Dece!</h1>
        <p>Udružimo se i pružimo šansu onima kojima je najpotrebnija. 
           Naša misija je da pomognemo deci da dobiju kvalitetno obrazovanje 
           i izgrade bolju budućnost.</p>
      </div>
      
      <!-- Desna kolona: 3 kartice događaja (WP Query) -->
      <div class="hero-right">
        <?php
        // WP Query: 3 posta iz custom post type-a "dogadjaji"
        $args = array(
          'post_type'      => 'dogadjaji',
          'posts_per_page' => 3,
        );
        
        $event_query = new WP_Query($args);

        if($event_query->have_posts()):
          while($event_query->have_posts()):
            $event_query->the_post();
            
            // Izvlačimo prvi <img> iz sadržaja
            $content = get_the_content();
            preg_match('/<img[^>]+>/i', $content, $matches);
            if (!empty($matches[0])) {
              $first_image = $matches[0];
            } else {
              $first_image = '<img src="https://via.placeholder.com/80x80/ccc/fff?text=No+Image" alt="No Image">';
            }
            ?>
            <div class="event-card">
              <div class="event-image">
                <?php echo $first_image; ?>
              </div>
              <div class="event-content">
                <div class="event-date">
                  <?php echo get_the_date('d. M Y'); ?>
                </div>
                <div class="event-title"><?php the_title(); ?></div>
                <div class="event-meta">
                  <span>12:00 h</span> 
                  <span>Beograd, RS</span>
                </div>
              </div>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        else:
          ?>
          <div class="event-card">
            <p>Nema dostupnih događaja.</p>
          </div>
          <?php
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- 2. DONJE STEP KARTICE (SPOJENE LINIJOM, sa animacijom ikonica) -->
  <section class="steps-section">
    <div class="steps-line"></div>
    
    <div class="steps-wrapper">
      <!-- 1. korak -->
      <div class="step-box">
        <div class="step-icon-wrapper">
          <i class="fas fa-notes-medical"></i>
        </div>
        <h4>Medicinski tretmani</h4>
        <p>Obezbeđujemo pristup neophodnoj zdravstvenoj nezi i terapijama.</p>
      </div>
      
      <!-- 2. korak -->
      <div class="step-box">
        <div class="step-icon-wrapper">
          <i class="fas fa-users"></i>
        </div>
        <h4>Tim projekta</h4>
        <p>Okupljamo stručnjake i volontere da zajedno ostvarimo uspeh.</p>
      </div>
      
      <!-- 3. korak -->
      <div class="step-box">
        <div class="step-icon-wrapper">
          <i class="fas fa-donate"></i>
        </div>
        <h4>Donirajte za cilj</h4>
        <p>Vaš doprinos menja živote i pruža nadu onima kojima je najpotrebnija.</p>
      </div>
    </div>
  </section>

</div>

<?php
get_footer();
?>
