<div class="footer-map">
    <iframe 
        width="100%" 
        height="300" 
        style="border:0;" 
        loading="lazy" 
        allowfullscreen 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46390.43765384039!2d19.566365712459774!3d43.38951903806236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4757f862f9e1e4c9%3A0x15bc58fab5e86331!2z0J_RgNC40ZjQtdC_0L7RmdC1LCDQodGA0LHQuNGY0LA!5e0!3m2!1ssr!2sus!4v1740065082769!5m2!1ssr!2sus">
    </iframe>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
            <?php endif; ?>

            <!-- Dodatna sekcija za društvene mreže i newsletter -->
            <div class="footer-extra">
                <div class="footer-social">
                    <h3>Pratite nas</h3>
                    <ul class="social-icons">
                        <li><a href="https://facebook.com/yourpage" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/yourprofile" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://linkedin.com/yourprofile" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h3>Newsletter</h3>
                    <form action="" method="post">
                        <input type="hidden" name="newsletter_form" value="1">
                        <input type="email" name="newsletter_email" placeholder="Vaša email adresa" required>
                        <button type="submit">Prijavi se</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Hand of Hope. Sva prava zadržana. &copy; Amina Memišahović</p>
            <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i> Nazad na vrh</a>
        </div>
    </div>
</footer>

<?php
// Modal prozor – prikazuje se samo ako je GET parametar newsletter_success=1
if ( isset( $_GET['newsletter_success'] ) && $_GET['newsletter_success'] == '1' ) : 
?>
    <div id="newsletter-success-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-icon"><i class="fas fa-check-circle"></i></div>
            <h2>Uspešno ste se prijavili!</h2>
            <p>Hvala što ste se priključili našem newsletter-u.</p>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var modal = document.getElementById("newsletter-success-modal");
        var span = modal.querySelector(".close");
        modal.style.display = "block";
        span.onclick = function() {
            modal.style.display = "none";
            // Ukloni GET parametar iz URL-a
            history.replaceState(null, null, window.location.pathname);
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                history.replaceState(null, null, window.location.pathname);
            }
        }
    });
    </script>
    <style>
    /* Modal pozadina */
    .modal {
        display: none; 
        position: fixed; 
        z-index: 1000; 
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.6);
        animation: fadeIn 0.5s ease;
    }
    /* Kontejner modala */
    .modal-content {
        position: relative;
        background: #fff;
        margin: 10% auto;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        width: 90%;
        max-width: 400px;
        text-align: center;
        animation: slideIn 0.5s ease;
    }
    /* Dugme za zatvaranje */
    .close {
        position: absolute;
        right: 15px;
        top: 10px;
        color: #888;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.3s ease;
    }
    .close:hover {
        color: #333;
    }
    /* Ikona u modal prozoru */
    .modal-icon {
        font-size: 60px;
        color: #28a745;
        margin-bottom: 20px;
        animation: popIn 0.5s ease;
    }
    /* Animacije */
    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @keyframes slideIn {
        from {transform: translateY(-50px); opacity: 0;}
        to {transform: translateY(0); opacity: 1;}
    }
    @keyframes popIn {
        0% {transform: scale(0);}
        100% {transform: scale(1);}
    }
    </style>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
