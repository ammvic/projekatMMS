<?php
/**
 * Plugin Name: Simple Donation Plugin
 * Plugin URI:  http://yourwebsite.com
 * Description: Dodaje stranicu za donacije sa opcijama izbora iznosa i PayPal dugmadima.
 * Version: 1.0
 * Author: Amina Memisahovic
 * Author URI: http://yourwebsite.com
 */

if (!defined('ABSPATH')) {
    exit;
}

// Registracija shortcode-a za prikaz donacija
function donation_form_shortcode() {
    ob_start(); ?>

    <div class="donation-container">
        <i class="fas fa-hand-holding-heart donation-icon"></i>
        <h2 class="donation-header">Podržite naš rad</h2>
        <p>Vaše donacije pomažu našem timu da nastavi sa kvalitetnim radom.</p>
        
        <form class="donation-form" action="https://www.paypal.com/donate" method="post" target="_blank">
    <input type="hidden" name="business" value="tvoj_paypal_email@primer.com">
    <input type="hidden" name="currency_code" value="USD">
    
    <input type="number" name="amount" placeholder="Unesite iznos (USD)" required>
    <button type="submit">Doniraj</button>
</form>


        <section class="donation-options">
            <h2>Izaberite iznos donacije</h2>
            <form action="https://www.paypal.com/donate" method="post" target="_blank">
                <input type="hidden" name="business" value="tvoj_paypal_email@primer.com">
                <input type="hidden" name="currency_code" value="USD">
                <button type="submit" name="amount" value="5">Doniraj $5</button>
                <button type="submit" name="amount" value="10">Doniraj $10</button>
                <button type="submit" name="amount" value="20">Doniraj $20</button>
            </form>
        </section>
    </div>

    <style>
        .donation-container {
            max-width: 600px;
            margin: 90px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .donation-header {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .donation-icon {
            font-size: 50px;
            color: #ff6600;
            margin-bottom: 15px;
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-10px); }
        }

        .donation-form input, .donation-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .donation-form button {
            background: #ff6600;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .donation-form button:hover {
            background: #e55b00;
        }

        .donation-options {
            margin-top: 20px;
        }

        .donation-options h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 15px;
        }

        .donation-options form button {
            background: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            padding: 10px 15px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .donation-options form button:hover {
            background: #218838;
        }
    </style>

    <?php
    return ob_get_clean();
}
add_shortcode('donation_form', 'donation_form_shortcode');
