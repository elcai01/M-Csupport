<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "tecnologia2643@gmail.com";
  $subject = "Pregunta desde mi sitio web";
  $message = "Hola,\n\nAlguien ha enviado una pregunta desde mi sitio web. La pregunta es:\n\n" . $_POST["question"] . "\n\nPor favor, responda a esta dirección de correo electrónico: " . $_POST["email"];
  $headers = "From: " . $_POST["email"];

  if(mail($to, $subject, $message, $headers)) {
    echo "Tu pregunta ha sido enviada con éxito. Pronto te responderemos.";
  } else {
    echo "Lo sentimos, ha ocurrido un error al enviar tu pregunta. Por favor, inténtalo de nuevo más tarde.";
  }
}
?>