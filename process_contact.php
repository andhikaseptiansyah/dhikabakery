<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$mail->SMTPDebug = SMTP ::DEBUG_SERVER
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';
    $preferred_product = htmlspecialchars($_POST['preferred_product']);

    // Validasi sederhana untuk memastikan semua field terisi
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Simulasi pengiriman data (misal, pengiriman email)
        echo "<p>Thank you, <strong>$name</strong>! Your message has been sent successfully.</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Message: $message</p>";
        echo "<p>Subscribed: $subscribe</p>";
        echo "<p>Preferred Product: $preferred_product</p>";
    } else {
        echo "<p>There was an error. Please fill in all required fields.</p>";
    }
}
?>
