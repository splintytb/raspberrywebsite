<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Traitement des données du formulaire, par exemple, l'envoi d'un e-mail
    $to = "sara.benbrahim@eleve.eti-valdanfa.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact";
    $headers = "From: $email";

    // Envoi du message par e-mail
    mail($to, $subject, $message, $headers);
}
?>