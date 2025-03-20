
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $edad = htmlspecialchars($_POST["edad"]);
    $opinion = htmlspecialchars($_POST["opinion"]);
    $calificacion = htmlspecialchars($_POST["calificacion"]);

    // 📧 Tu correo donde recibirás las respuestas
    $destinatario = "bladimirbacab@gmail.com"; 

    // 📌 Asunto del correo
    $asunto = "Nueva Opinión en la Página";

    // 📜 Cuerpo del mensaje
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Edad: $edad\n";
    $mensaje .= "Opinión:\n$opinion\n";
    $mensaje .= "Calificación: $calificacion/10\n";

    // 📨 Encabezados del correo//
    $headers .= "Reply-To: $destinatario\r\n";

    // ✉️ Enviar correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "¡Gracias por tu opinión! Se ha enviado correctamente.";
    } else {
        echo "Hubo un error al enviar tu opinión. Intenta de nuevo.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
