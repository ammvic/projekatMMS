<?php
$to = "a.mmvic02.com"; // Zameni sa svojom adresom
$subject = "Test PHP Mail";
$message = "Ovo je test email poslat direktno iz PHP-a.";
$headers = "From: noreply@tvoj-domen.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "✅ Email je uspešno poslat!";
} else {
    echo "❌ Email NIJE poslat!";
}
?>
