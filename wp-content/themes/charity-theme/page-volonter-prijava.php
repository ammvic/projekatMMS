<?php
/*
Template Name: Volunteer Application Page
*/
get_header();
?>

<style>
/* Glavni kontejner */
.volunteer-form-section {
  max-width: 600px;
  margin: 100px auto;
  background: #fff;
  padding: 50px 40px;
  border-radius: 16px;
  box-shadow: 0 6px 25px rgba(0,0,0,0.1);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.volunteer-form-section::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle at center, rgba(231,76,60,0.08), transparent 70%);
  z-index: 0;
}
.volunteer-form-section * {
  position: relative;
  z-index: 1;
}

/* Naslov i opis */
.volunteer-form-section h2 {
  font-size: 2.2rem;
  margin-bottom: 15px;
  color: #e74c3c;
  font-weight: bold;
  text-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
.volunteer-form-section p {
  margin-bottom: 30px;
  font-size: 1.05rem;
  color: #555;
  line-height: 1.6;
}

/* Poruka o uspehu */
.volunteer-form-section .success-message {
  background: linear-gradient(120deg, #27ae60, #2ecc71);
  color: #fff;
  padding: 15px;
  border-radius: 10px;
  margin-bottom: 25px;
  font-weight: bold;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

/* Polja forme */
.volunteer-form .form-group {
  margin-bottom: 22px;
  text-align: left;
}
.volunteer-form label {
  display: block;
  margin-bottom: 6px;
  font-weight: 600;
  color: #333;
  font-size: 0.95rem;
}
.volunteer-form .input-field {
  width: 100%;
  padding: 14px 16px;
  border: 1px solid #ddd;
  border-radius: 10px;
  font-size: 1rem;
  transition: all 0.3s ease;
  background: #fafafa;
}
.volunteer-form .input-field:focus {
  border-color: #e67e22;
  background: #fff;
  box-shadow: 0 0 8px rgba(230, 126, 34, 0.4);
  outline: none;
}

/* Submit dugme */
.volunteer-form .submit-btn input[type="submit"] {
  background: linear-gradient(120deg, #e74c3c, #e67e22);
  color: #fff;
  padding: 14px 35px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  font-weight: bold;
  font-size: 1rem;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
.volunteer-form .submit-btn input[type="submit"]:hover {
  background: linear-gradient(120deg, #e67e22, #e74c3c);
  transform: translateY(-3px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.25);
}

/* Responsive */
@media (max-width: 600px) {
  .volunteer-form-section {
    max-width: 92%;
    margin: 60px auto;
    padding: 30px 20px;
  }
  .volunteer-form-section h2 {
    font-size: 1.8rem;
  }
}
</style>

<div class="volunteer-form-section">
  <h2>Prijava za volontere</h2>
  <p>Ispuni formu i postani deo našeg tima. Tvoje vreme i energija prave razliku ❤️</p>

  <!-- Forma iz plugina -->
  <?php echo do_shortcode('[contact-form-7 id="438fff0" title="Prijava za volontere"]'); ?>
</div>

<?php
get_footer();
?>
