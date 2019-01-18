<?php

// Llamando a los campos
$name = $_POST("name");
$email = $_POST("email");
$message = $_POST("message");

// Datos para el correo
$sendto = "acunill86@gmail.com";
$issue = "Fuel Moisture";

$mailcnt = "From: $name \n";
$mailcnt .= "Mail: $email \n";
$mailcnt .= "Message: $message \n";

//Enviando mensaje
mail($sendto, $issue, $mailcnt);
?>
