<?php
/**
 * Plugin Name: My SMTP Plugin
 * Plugin URI:  http://yourwebsite.com
 * Description: Plugin za slanje mejlova preko SMTP-a.
 * Version:     1.0
 * Author:      Amina Memisahovic
 * Author URI:  http://yourwebsite.com
 */

// Blokiraj direktan pristup
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// SMTP konfiguracija
function my_smtp_configuration( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.gmail.com'; // Gmail SMTP server
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 465; // 465 za SSL, 587 za TLS
    $phpmailer->Username   = 'a.mmvic02@gmail.com';
    $phpmailer->Password   = 'jiyfxynmxntzaczx'; // Koristi Google App Password!
    $phpmailer->SMTPSecure = 'ssl'; // 'ssl' ako koristiš SSL
    $phpmailer->From       = 'a.mmvic02@gmail.com';
    $phpmailer->FromName   = 'Organizacija Hand of Hope';
    $phpmailer->Sender     = 'a.mmvic02@gmail.com';
    // Preusmeravanje debug izlaza u error log umesto na ekran:
    $phpmailer->SMTPDebug  = 2; // Postavite na 0 kada više ne želite debug informacije
    $phpmailer->Debugoutput = 'error_log';
}
add_action( 'phpmailer_init', 'my_smtp_configuration' );

// Filteri za wp_mail_from i wp_mail_from_name
function my_wp_mail_from( $email ) {
    return 'a.mmvic02@gmail.com';
}
add_filter( 'wp_mail_from', 'my_wp_mail_from' );

function my_wp_mail_from_name( $name ) {
    return 'Organizacija Hand of Hope';
}
add_filter( 'wp_mail_from_name', 'my_wp_mail_from_name' );

function my_newsletter_form_handler() {
    if ( isset( $_POST['newsletter_form'] ) && isset( $_POST['newsletter_email'] ) ) {
        $email = sanitize_email( $_POST['newsletter_email'] );
        if ( is_email( $email ) ) {
            $subject = "Dobrodošli u naš newsletter!";
            $message = "<h1>Hvala što ste se prijavili!</h1><p>Drago nam je što ste se priključili!</p>";
            $headers = array( 'Content-Type: text/html; charset=UTF-8' );

            if ( wp_mail( $email, $subject, $message, $headers ) ) {
                // Nakon uspešnog slanja, redirektuj korisnika sa GET parametrom
                wp_redirect( add_query_arg( 'newsletter_success', '1', $_SERVER['REQUEST_URI'] ) );
                exit;
            } else {
                error_log( "❌ Greška prilikom slanja emaila." );
            }
        } else {
            error_log( "❌ Neispravan email: " . $email );
        }
    }
}
add_action( 'init', 'my_newsletter_form_handler' );

// Funkcija za hvatanje grešaka prilikom slanja emaila
function my_mail_failed_handler( $wp_error ) {
    error_log( "Greška pri slanju emaila: " . print_r( $wp_error, true ) );
}
add_action( 'wp_mail_failed', 'my_mail_failed_handler', 10, 1 );

// Funkcija za slanje testnog emaila
function my_send_test_email() {
    $to      = "a.mmvic02@gmail.com";
    $subject = "Testni email iz mog SMTP plugina";
    $message = "<h1>Ovo je test</h1><p>Mejl radi!</p>";
    $headers = array( 'Content-Type: text/html; charset=UTF-8' );

    if ( wp_mail( $to, $subject, $message, $headers ) ) {
        return "✅ Email je uspešno poslat!";
    } else {
        return "❌ Greška prilikom slanja emaila!";
    }
}

// Dodavanje stranice u admin panel
function my_smtp_plugin_menu() {
    add_menu_page(
        'SMTP Test',          // Naslov stranice
        'SMTP Email',         // Naziv u meniju
        'manage_options',     // Dozvola
        'my-smtp-plugin',     // Slug
        'my_smtp_plugin_page' // Callback funkcija
    );
}
add_action( 'admin_menu', 'my_smtp_plugin_menu' );

// HTML za admin stranicu
function my_smtp_plugin_page() {
    ?>
    <div class="wrap">
        <h1>SMTP Email Plugin</h1>
        <p>Klikni na dugme ispod da pošalješ testni email.</p>
        <form method="post">
            <input type="submit" name="send_test_email" value="Pošalji testni email" class="button button-primary">
        </form>
        <?php
        if ( isset( $_POST['send_test_email'] ) ) {
            echo '<p>' . my_send_test_email() . '</p>';
        }
        ?>
    </div>
    <?php
}
?>
