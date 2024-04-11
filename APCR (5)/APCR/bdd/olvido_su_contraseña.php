<?php
session_start();

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Compruebe si el formulario está enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recuperar datos del formulario
    $correo = $_POST["correo"];


    // Consulta SQL para verificar las credenciales del usuario
    $baseAPCR1 = "SELECT * FROM residente WHERE correo='$correo'";
    $result = $conn->query($baseAPCR1);

    if ($result->num_rows == 1) {
        // Usuario autenticado exitosamente
        $_SESSION["correo"] = $correo;
        header("Location: ../olvidocontra_exitoso.html"); // Redirigir a una página de bienvenida o panel de control
        exit();
    } else {
        // Error de autenticación
        header("Location: ../olvidocontra_error.html");
        
    }

    // Cerrar la conexión de la base de datos
    $conn->close();
 }
    ?>