<?php
/*
Template Name: Volunteer Application Page
*/
get_header();
?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-7ig5JNNZ4hAqEJ6r4H7hC4pqlXoFw7CGI3XQxZwBqO0j1z64y9B4G5EoS9dT9ZV6vJ6QoX5uZ4tQWq1zj3xVAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
/* Animacija */
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(40px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Kontejner */
.volunteer-form-section {
  max-width: 650px;
  margin: 100px auto;
  background: #fff;
  padding: 50px 40px;
  border-radius: 20px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.08);
  text-align: center;
  position: relative;
  overflow: hidden;
  font-family: "Segoe UI", Roboto, sans-serif;
  opacity: 0;
  animation: fadeInUp 0.9s ease forwards;
}
.volunteer-form-section::before {
  content: "";
  position: absolute;
  top: -60%;
  left: -60%;
  width: 220%;
  height: 220%;
  background: radial-gradient(circle at center, rgba(231,76,60,0.07), transparent 70%);
  z-index: 0;
}
.volunteer-form-section * {
  position: relative;
  z-index: 1;
}

/* Naslov i opis */
.volunteer-form-section h2 {
  font-size: 2.4rem;
  margin-bottom: 18px;
  color: #e74c3c;
  font-weight: 700;
  letter-spacing: -0.5px;
}
.volunteer-form-section h2 i {
  margin-right: 10px;
  color: #e67e22;
}
.volunteer-form-section p {
  margin-bottom: 35px;
  font-size: 1.1rem;
  color: #555;
  line-height: 1.7;
}
.volunteer-form-section p i {
  margin-right: 6px;
  color: #e74c3c;
}

/* Poruka o uspehu */
.volunteer-form-section .success-message {
  background: linear-gradient(135deg, #27ae60, #2ecc71);
  color: #fff;
  padding: 16px 20px;
  border-radius: 12px;
  margin-bottom: 25px;
  font-weight: 600;
  font-size: 1rem;
  box-shadow: 0 5px 15px rgba(0,0,0,0.15);
  animation: fadeInUp 0.7s ease forwards;
}

/* Polja forme */
.volunteer-form .form-group {
  position: relative;
  margin-bottom: 22px;
}

.volunteer-form .input-field,
.volunteer-form textarea {
  width: 100%;
  padding: 14px 16px 14px 45px; /* levo prostor za ikonu */
  border: 1px solid #ddd;
  border-radius: 12px;
  font-size: 1rem;
  background: #fafafa;
  transition: all 0.25s ease;
  resize: none;
  min-height: 50px;
}

.volunteer-form .input-field:focus,
.volunteer-form textarea:focus {
  border-color: #e67e22;
  background: #fff;
  box-shadow: 0 0 10px rgba(230,126,34,0.25);
  outline: none;
}

/* Ikonice unutar inputa */
.volunteer-form .form-group i {
  position: absolute;
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
  color: #aaa;
  font-size: 1.1rem;
  pointer-events: none; /* da klik radi na input */
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
}

.volunteer-form .input-field:focus + i,
.volunteer-form textarea:focus + i {
  color: #e67e22;
}

/* Submit dugme */
.volunteer-form .submit-btn input[type="submit"] {
  display: inline-block;
  background: linear-gradient(135deg, #e74c3c, #e67e22);
  color: #fff;
  padding: 14px 40px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  font-weight: 600;
  font-size: 1rem;
  transition: all 0.3s ease;
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.volunteer-form .submit-btn input[type="submit"]:hover {
  background: linear-gradient(135deg, #e67e22, #e74c3c);
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}

/* Responsive */
@media (max-width: 650px) {
  .volunteer-form-section {
    max-width: 92%;
    margin: 60px auto;
    padding: 30px 20px;
  }
  .volunteer-form-section h2 {
    font-size: 1.9rem;
  }
  .volunteer-form-section p {
    font-size: 1rem;
  }
}
</style>

<div class="volunteer-form-section">
  <h2><i class="fas fa-hands-helping"></i> Prijava za volontere</h2>
  <p><i class="fas fa-heart"></i> Ispuni formu i postani deo našeg tima. Tvoje vreme i energija prave razliku.</p>

  <!-- Forma iz Contact Form 7 sa ikonama unutar inputa -->
  <div class="volunteer-form">
    <?php echo do_shortcode('[contact-form-7 id="438fff0" title="Prijava za volontere"]'); ?>
  </div>
</div>

<?php
get_footer();
?>
