<div class="footer-map">
    <iframe 
        width="100%" 
        height="300" 
        style="border:0;" 
        loading="lazy" 
        allowfullscreen 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46390.43765384039!2d19.566365712459774!3d43.38951903806236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4757f862f9e1e4c9%3A0x15bc58fab5e86331!2z0J_RgNC40ZjQtdC_0L7RmdC1LCDQodGA0LHQuNGY0LA!5e0!3m2!1ssr!2sus!4v1740065082769!5m2!1ssr!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<footer class="site-footer">
    <div class="container">
        <?php if (is_active_sidebar('footer-sidebar')) : ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-sidebar'); ?>
            </div>
        <?php endif; ?>

        <p>&copy; <?php echo date('Y'); ?> Hand of Hope. Sva prava zadržana. &copy; Amina Memišahović</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
