<?php
/*
Template Name: Donations Page
*/

get_header(); 
?>

<div class="donation-content">
    <?php echo do_shortcode('[donation_form]'); ?>
</div>

<?php get_footer(); ?>
