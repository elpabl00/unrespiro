<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);

    $para = $correo;
    $asunto = "¡Gracias por registrarte!";
    $mensaje = "Hola $nombre,\n\nGracias por registrarte en nuestra página. 🎉\n\nPronto te enviaremos más novedades.\n\n¡Un saludo!";
    $cabeceras = "From: contacto@tusitio.com\r\n"; // cambia esto por un correo real si quieres

    if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "<h2>✅ Correo enviado con éxito</h2><p>Revisa tu bandeja de entrada.</p>";
    } else {
        echo "<h2>❌ Error al enviar el correo</h2><p>Inténtalo más tarde.</p>";
    }
} else {
    echo "<h2>Acceso no permitido</h2>";
}
?>
