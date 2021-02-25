<?php

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email",  FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

$to = "alexandre.pntrn@eduge.ch";
$subject = "Formulaire de contact Develogic:  $name";
$body = "Vous avez reçu une nouvelle soumission de formulaire Develogic.\n\n"."Voici les détails:\n\nNom: $name\n\nEmail: $email\n\nNuméro de téléphone: $phone\n\nMessage:\n$message";
$header = "From: noreply@develogic.tech\n";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>

<?php

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email",  FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

$to = "nelson.mrqsn@eduge.ch";
$subject = "Formulaire de contact Develogic:  $name";
$body = "Vous avez reçu une nouvelle soumission de formulaire Develogic.\n\n"."Voici les détails:\n\nNom: $name\n\nEmail: $email\n\nNuméro de téléphone: $phone\n\nMessage:\n$message";
$header = "From: noreply@develogic.tech\n";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>

