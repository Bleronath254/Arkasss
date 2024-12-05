<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adresa juaj e emailit
    $to = "info@arkas-service.de";
    $subject = "Kontaktformular ";

    // Përmbajtja e emailit
    $email_content = "Name: $name\n";
    $email_content .= "Telefonnummer: $phone\n";
    $email_content .= "E-mail: $email\n\n";
    $email_content .= "Nachricht:\n$message\n";

    // Headers për email
    $headers = "From: $email";

    // Dërgimi i emailit
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Nachricht wurde erfolgreich gesendet";
    } else {
        echo "Das Senden der Nachricht ist fehlgeschlagen.";
    }
} else {
    echo "Das Formular wurde nicht korrekt ausgefüllt.";
}
?>
