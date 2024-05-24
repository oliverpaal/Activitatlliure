<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $description = htmlspecialchars($_POST['description']);

    $to = "ppazgutierrez.cf@iesesteveterradas.cat";
    $subject = "Nuevo mensaje de contacto de " . $name;
    $body = "Nombre: " . $name . "\nCorreo: " . $email . "\nMensaje:\n" . $description;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje. Inténtelo de nuevo más tarde.";
    }
} else {
    echo "Método de solicitud no soportado.";
}
?>