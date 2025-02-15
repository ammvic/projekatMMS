<?php
get_header(); // Učitava globalni header
?>

<section class="error-404 not-found">
    <div class="container">
        <h1>404 – Stranica nije pronađena</h1>
        <p>Izgleda da ste pokušali da pristupite stranici koja ne postoji. 
           Proverite da li ste ispravno uneli adresu ili se vratite na početnu stranu.</p>
        
        <!-- Dugme koje vodi na početnu stranu -->
        <a href="<?php echo home_url(); ?>" class="btn-404">Nazad na početnu</a>
    </div>
</section>

<?php
get_footer(); // Učitava globalni footer
?>
