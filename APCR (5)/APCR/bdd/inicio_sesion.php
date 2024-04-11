<?php
session_start();

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Compruebe si el formulario está enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recuperar datos del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["clave"];

    // Consulta SQL para verificar las credenciales del usuario
    $baseAPCR1 = "SELECT * FROM residente WHERE correo='$correo' AND clave='$contrasena'";
    $result = $conn->query($baseAPCR1);

    if ($result->num_rows == 1) {
        // Usuario autenticado exitosamente
        $_SESSION["clave"] = true;
        $_SESSION["correo"] = $correo;
        header("Location: ../barra.html"); // Redirigir a una página de bienvenida o panel de control
        exit();
    } else {
        // Error de autenticación
        header("Location: ../index_error_ingreso.html");
        
    }

    // Cerrar la conexión de la base de datos
    $conn->close();
}
?>
