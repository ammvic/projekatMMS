<?php
/*
Template Name: Volunteers Page
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
/* RESET / OSNOVNI STILOVI */
* {
  box-sizing: border-box;
}
body, h1, h2, h3, h4, p, ul, li {
  margin: 0; 
  padding: 0;
}
img {
  max-width: 100%;
  height: auto;
  display: block;
}

/* ANIMACIJE */
@keyframes hoverScale {
  0% { transform: scale(1); }
  100% { transform: scale(1.05); }
}

@keyframes bounceIcon {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-10px); }
  60% { transform: translateY(-5px); }
}

@keyframes spinIcon {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* GLAVNI KONTEJNER STRANICE */
.page-volunteers {
  font-family: Arial, sans-serif; /* prilagodi font po želji */
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px 60px 20px;
}

/* -------------------------------------------------- */
/* HERO: "Meet Our Awesome Volunteers" - GRADIENT */
/* -------------------------------------------------- */
.hero-volunteers {
  margin-top: 80px;
  text-align: center;
  padding: 60px 0 80px 0;
  /* Gradijent pozadina umesto bele */
  background: linear-gradient(120deg, #e74c3c 0%, #e67e22 100%);
  color: #fff; 
  position: relative;
  overflow: hidden;
}
.hero-volunteers::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: radial-gradient(rgba(255,255,255,0.15), transparent 70%);
  z-index: 1;
}
.hero-volunteers .volunteers-subtitle {
  position: relative;
  z-index: 2;
  display: block;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 0.9rem;
  letter-spacing: 1px;
  margin-bottom: 8px;
}
.hero-volunteers h2 {
  position: relative;
  z-index: 2;
  font-size: 3rem;
  color: #fff;
  margin-bottom: 40px;
  text-shadow: 0 2px 5px rgba(0,0,0,0.3);
}
.volunteers-cards {
  position: relative;
  z-index: 2;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
}

/* VOLONTER-KARTICE sa hover animacijom */
.volunteer-card {
  background: #fff;
  width: 240px;
  padding: 20px;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
}
.volunteer-card:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 15px rgba(0,0,0,0.25);
  animation: hoverScale 0.3s forwards;
}
.volunteer-card img {
  border-radius: 8px;
  object-fit: cover;
  display: block;    
  margin: 0 auto;    
  width: 100%;
  height: 150px;
}
.volunteer-card h3 {
  margin-top: 15px;
  font-size: 1.2rem;
  color: #333;
}
.volunteer-card p {
  margin-top: 5px;
  color: #555;
  font-size: 0.95rem;
}

/* -------------------------------------------------- */
/* WHY CHOOSE US (SA HOVER NA IKONAMA) */
/* -------------------------------------------------- */
.why-choose-section {
  display: flex;
  align-items: center;
  gap: 40px;
  margin-top: 60px;
  margin-bottom: 60px;
}
.why-image {
  flex: 1;
  max-width: 100%;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.15);
}
.why-content {
  flex: 1;
  padding: 0 20px;
}
.why-content h3 {
  color: #E94F4F;
  font-size: 1rem;
  text-transform: uppercase;
  margin-bottom: 8px;
  letter-spacing: 1px;
}
.why-content h2 {
  font-size: 2.2rem;
  margin-bottom: 20px;
  color: #333;
  position: relative;
}
.why-content p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 30px;
  max-width: 500px;
}

/* Kartice (npr. Najveća stopa uspeha, Milioni u prikupljenim sredstvima) */
.why-items {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}
.why-item {
  flex: 1 1 45%;
  background: #f7f7f7;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}
.why-item:hover {
  transform: translateY(-5px);
}
.why-item-icon {
  width: 60px;
  height: 60px;
  background: #E94F4F;
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 15px auto;
  font-size: 1.6rem;
  transition: all 0.3s ease;
}
.why-item-icon:hover {
  animation: bounceIcon 0.8s;
}
.why-item h4 {
  margin-bottom: 8px;
  font-size: 1.1rem;
  color: #333;
}
.why-item p {
  color: #777;
  font-size: 0.95rem;
}
.why-image img {
  width: 100%;
  height: auto;
  max-width: none;
  transition: transform 0.8s ease;
}
.why-image:hover img {
  transform: scale(1.05);
}

/* -------------------------------------------------- */
/* STATISTIKA (gradient + animacija ikona) */
/* -------------------------------------------------- */
.stats-section {
  background: linear-gradient(90deg, #8e44ad 0%, #2980b9 100%);
  padding: 60px 20px;
  border-radius: 8px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-bottom: 40px;
}

.stat-box {
  text-align: center;
  color: #fff;
  transition: transform 0.3s ease;
  position: relative;
}
.stat-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
.stat-icon {
  width: 70px;
  height: 70px;
  background: #e67e22;
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 15px auto;
  font-size: 1.5rem;
  transition: all 0.3s ease;
}
.stat-icon:hover {
  animation: spinIcon 0.6s;
}
.stat-box h3 {
  font-size: 2.2rem;
  margin-bottom: 10px;
  color: #fff;
}
.stat-box p {
  font-size: 1rem;
  color: #fff;
}

/* -------------------------------------------------- */
/* RESPONSIVE PRILAGODBA */
/* -------------------------------------------------- */
@media (max-width: 992px) {
  .hero-volunteers {
    padding: 40px 10px;
  }
  .why-choose-section {
    flex-direction: column;
  }
  .why-image, .why-content {
    flex: 1 1 100%;
  }
  .why-items {
    flex-direction: column;
  }
  .why-item {
    flex: 1 1 100%;
  }
  .stats-section {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .stat-box {
    width: 80%;
    margin-bottom: 20px;
  }
}
</style>

<div class="page-volunteers">
  
  <!-- HERO: Volonteri (sa gradient i background animacijom) -->
  <section class="hero-volunteers">
    <span class="volunteers-subtitle">Volonteri</span>
    <h2>Upoznajte naše sjajne volontere</h2>
    
    <div class="volunteers-cards">
      <?php
      // WP Query za CPT "volonteri"
      $args = array(
        'post_type'      => 'volonteri',  // Naziv CPT-a iz plugina
        'posts_per_page' => 8,            // prilagodi broj volontera
      );
      $volunteers_query = new WP_Query($args);

      if ($volunteers_query->have_posts()):
        while ($volunteers_query->have_posts()):
          $volunteers_query->the_post();
          ?>
          <div class="volunteer-card">
            <?php 
            // Ako ima istaknuta slika (featured image), prikaži je
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium'); 
            } else {
              // fallback slika
              echo '<img src="https://via.placeholder.com/240x150/ccc/fff?text=No+Image" alt="No Image">';
            }
            ?>
            
            <!-- Naziv volontera (title) -->
            <h3><?php the_title(); ?></h3>
            
            <!-- Opciono: kratak opis (excerpt) ili custom polje -->
            <p><?php echo get_the_excerpt(); ?></p>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
      else:
        echo '<p>Nema volontera u bazi.</p>';
      endif;
      ?>
    </div><!-- .volunteers-cards -->
  </section>

  <!-- ZAŠTO ODABRATI NAS (sa animacijama) -->
  <section class="why-choose-section">
    <!-- Leva kolona: slika (zoom on hover) -->
    <div class="why-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p.png" alt="Zašto nas odabrati">
    </div>
    <!-- Desna kolona: tekst + bullet items -->
    <div class="why-content">
      <h3>Zašto nas odabrati</h3>
      <h2>Zašto izabrati našu humanitarnu platformu</h2>
      <p>
        Naša platforma omogućava transparentno prikupljanje i raspodelu sredstava
        za najugroženije zajednice. Udruženi napori donatora i volontera pomažu
        u stvaranju bolje budućnosti za sve kojima je pomoć najpotrebnija.
      </p>
      <div class="why-items">
        <!-- 1. kartica: Najveća stopa uspeha -->
        <div class="why-item">
          <div class="why-item-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <h4>Najveća stopa uspeha</h4>
          <p>
            Naši projekti donose vidljive rezultate zahvaljujući jasnim ciljevima i 
            dobroj organizaciji timova.
          </p>
        </div>
        <!-- 2. kartica: Milioni u prikupljenim sredstvima -->
        <div class="why-item">
          <div class="why-item-icon">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <h4>Milioni u prikupljenim sredstvima</h4>
          <p>
            Zahvaljujući velikodušnim donatorima, obezbeđujemo kontinuitet 
            pomoći i finansijsku stabilnost za dugoročne projekte.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- STATISTIKA (gradient + animacija) -->
  <section class="stats-section">
    <!-- 1. Završenih projekata -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-briefcase"></i>
      </div>
      <h3>790</h3>
      <p>Završenih projekata</p>
    </div>
    <!-- 2. Prikupljena sredstva -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <h3>766K</h3>
      <p>Prikupljena sredstva</p>
    </div>
    <!-- 3. Partneri -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-handshake"></i>
      </div>
      <h3>850</h3>
      <p>Partneri</p>
    </div>
    <!-- 4. Volonteri -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-users"></i>
      </div>
      <h3>200</h3>
      <p>Volonteri</p>
    </div>
  </section>

</div><!-- .page-volunteers -->

<?php
get_footer();
?>
