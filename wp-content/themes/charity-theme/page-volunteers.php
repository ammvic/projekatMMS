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
.page-volunteers {
  font-family: Arial, sans-serif; /* prilagodi font po želji */
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px 60px 20px;
}

/* -------------------------------------------------- */
/* HERO: "Meet Our Awesome Volunteers" */
/* -------------------------------------------------- */
.hero-volunteers {
  margin-top: 80px;
  text-align: center;
  padding: 40px 0 60px 0;
  background-color: #fff; /* bijela pozadina, prilagodi po želji */
}
.hero-volunteers .volunteers-subtitle {
  display: block;
  color: #E94F4F;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 0.9rem;
  letter-spacing: 1px;
  margin-bottom: 8px;
}
.hero-volunteers h2 {
  font-size: 2.5rem;
  color: #333;
  margin-bottom: 40px;
}
.volunteers-cards {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
}
.volunteer-card {
  background:rgb(202, 194, 194);
  width: 220px;
  padding: 20px;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
.volunteer-card img {
  border-radius: 8px;
  object-fit: cover;
}
.volunteer-card h3 {
  margin-top: 15px;
  font-size: 1.1rem;
  color: #333;
}
.volunteer-card p {
  margin-top: 5px;
  color: #777;
  font-size: 0.95rem;
}
.volunteer-card img {
  border-radius: 8px;
  object-fit: cover;
  display: block;     /* čini sliku blok elementom */
  margin: 0 auto;     /* centrira sliku unutar roditelja */
}

/* -------------------------------------------------- */
/* WHY CHOOSE US */
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
  max-width: 100%; /* Povećaj ovu vrijednost po potrebi */
 
}
.why-content {
  flex: 1;
}
.why-content h3 {
  color: #E94F4F;
  font-size: 1rem;
  text-transform: uppercase;
  margin-bottom: 8px;
  letter-spacing: 1px;
}
.why-content h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #333;
}
.why-content p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 30px;
  max-width: 500px;
}

/* Kartice (npr. Highest Success Rate, Millions in Funding) */
.why-items {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}
.why-item {
  flex: 1 1 45%;
  background: #f7f7f7;
  border-radius: 6px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.why-item-icon {
  width: 50px;
  height: 50px;
  background: #E94F4F;
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 15px auto;
  font-size: 1.4rem;
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
  width: 100%;    /* Slika će se protegnuti na 100% širine kontejnera */
  height: auto;   /* Očuvanje proporcija */
  max-width: none; /* Uklanja eventualno ograničenje */
}


/* -------------------------------------------------- */
/* STATISTIKA (crna pozadina, 4 "kolone") */
/* -------------------------------------------------- */
.stats-section {
  background-color: #000;
  padding: 60px 20px;
  border-radius: 8px;
  /* Umjesto flex: */
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}

.stat-box {
  text-align: center;
  color: #fff;
  /* Ne treba ti flex-basis ni margin, grid sve rješava */
}

.stat-icon {
  width: 60px;
  height: 60px;
  background: #E94F4F;
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 15px auto;
  font-size: 1.5rem;
}

.stat-box h3 {
  font-size: 2rem;
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
    flex-direction: column;
    align-items: center;
  }
  .stat-box {
    flex: 1 1 100%;
    max-width: 300px;
  }
}
</style>

<div class="page-volunteers">
  
  <!-- HERO: Volunteers -->
  <section class="hero-volunteers">
    <span class="volunteers-subtitle">Volonteri</span>
    <h2>Upoznajte naše sjajne volontere</h2>
    <div class="volunteers-cards">
      <!-- 1. volonter -->
      <div class="volunteer-card">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Volonter 1">
        <h3>Susan Hardson</h3>
        <p>Volonter</p>
      </div>
      <!-- 2. volonter -->
      <div class="volunteer-card">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Volonter 2">
        <h3>Lauren Davis</h3>
        <p>Volonter</p>
      </div>
      <!-- 3. volonter -->
      <div class="volunteer-card">
        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Volonter 3">
        <h3>Catherine Jones</h3>
        <p>Volonter</p>
      </div>
      <!-- 4. volonter -->
      <div class="volunteer-card">
        <img src="https://randomuser.me/api/portraits/men/78.jpg" alt="Volonter 4">
        <h3>David Stage</h3>
        <p>Volonter</p>
      </div>
    </div>
  </section>

  <!-- ZAŠTO ODABRATI NAS -->
  <section class="why-choose-section">
    <!-- Leva kolona: slika -->
    <div class="why-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p.png" alt="Zašto nas odabrati">
    </div>
    <!-- Desna kolona: tekst + bullet items -->
    <div class="why-content">
      <h3>Zašto nas odabrati</h3>
      <h2>Zašto izabrati našu humanitarnu platformu</h2>
      <p>
        Fusce ac cursus nunc. Etiam semper tempor tempor.  
        Suspendisse suscipit volutpat purus. Integer luctus quam sed nunc venenatis, 
        vitae luctus nisl pellentesque.
      </p>
      <div class="why-items">
        <!-- 1. kartica: Najveća stopa uspeha -->
        <div class="why-item">
          <div class="why-item-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <h4>Najveća stopa uspeha</h4>
          <p>Donec sollicitudin metus sed nunc finibus, vel auctor lorem feugiat.</p>
        </div>
        <!-- 2. kartica: Milioni u prikupljenim sredstvima -->
        <div class="why-item">
          <div class="why-item-icon">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <h4>Milioni u prikupljenim sredstvima</h4>
          <p>Proin laoreet lorem a nunc varius, vel cursus leo porttitor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STATISTIKA (Završeni projekti, Prikupljena sredstva, Partneri, Volonteri) -->
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

</div>


<?php
get_footer();
?>
