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
  background: #ffffff;
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
  /* prilagodi dimenzije / omjere slike po želji */
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

/* -------------------------------------------------- */
/* STATISTIKA (crna pozadina, 4 "kolone") */
/* -------------------------------------------------- */
.stats-section {
  background-color: #000;
  padding: 60px 20px;
  border-radius: 8px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
}
.stat-box {
  flex: 1 1 calc(25% - 20px);
  text-align: center;
  color: #fff;
  margin: 0 10px;
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
    <span class="volunteers-subtitle">Volunteers</span>
    <h2>Meet Our Awesome Volunteers</h2>
    <div class="volunteers-cards">
      <!-- 1. volonter -->
      <div class="volunteer-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/susan.jpg" alt="Susan Hardson">
        <h3>Susan Hardson</h3>
        <p>Volunteer</p>
      </div>
      <!-- 2. volonter -->
      <div class="volunteer-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lauren.jpg" alt="Lauren Davis">
        <h3>Lauren Davis</h3>
        <p>Volunteer</p>
      </div>
      <!-- 3. volonter -->
      <div class="volunteer-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catherine.jpg" alt="Catherine Jones">
        <h3>Catherine Jones</h3>
        <p>Volunteer</p>
      </div>
      <!-- 4. volonter -->
      <div class="volunteer-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/david.jpg" alt="David Stage">
        <h3>David Stage</h3>
        <p>Volunteer</p>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="why-choose-section">
    <!-- Lijeva kolona: slika -->
    <div class="why-image">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-choose-us.jpg" alt="Why Choose Us">
    </div>
    <!-- Desna kolona: tekst + bullet items -->
    <div class="why-content">
      <h3>Why Choose Us</h3>
      <h2>Why Choose Our Charity Platform</h2>
      <p>
        Fusce ac cursus nunc. Etiam semper tempor tempor.  
        Suspendisse suscipit volutpat purus. Integer luctus quam sed nunc venenatis, vitae luctus nisl pellentesque.
      </p>
      <div class="why-items">
        <!-- 1. kartica: Highest Success Rate -->
        <div class="why-item">
          <div class="why-item-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <h4>Highest Success Rate</h4>
          <p>Donec sollicitudin metus sed nunc finibus, vel auctor lorem feugiat.</p>
        </div>
        <!-- 2. kartica: Millions in Funding -->
        <div class="why-item">
          <div class="why-item-icon">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <h4>Millions in Funding</h4>
          <p>Proin laoreet lorem a nunc varius, vel cursus leo porttitor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STATISTIKA (Projects, Funds, Partner Pledges, Volunteers) -->
  <section class="stats-section">
    <!-- 1. Projects Completed -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-briefcase"></i>
      </div>
      <h3>790</h3>
      <p>Projects Completed</p>
    </div>
    <!-- 2. Funds Raised to Date -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <h3>766K</h3>
      <p>Funds Raised to Date</p>
    </div>
    <!-- 3. Partner Pledges -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-handshake"></i>
      </div>
      <h3>850</h3>
      <p>Partner Pledges</p>
    </div>
    <!-- 4. Volunteers -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fas fa-users"></i>
      </div>
      <h3>200</h3>
      <p>Volunteers</p>
    </div>
  </section>

</div>

<?php
get_footer();
?>
